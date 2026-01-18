from django.shortcuts import render, redirect, get_object_or_404
from .models import Tecnico
from .forms import TecnicoForm
from django.contrib import messages
from django.contrib.auth.decorators import login_required
from django.views.decorators.cache import never_cache
from django.contrib.auth.decorators import login_required, user_passes_test


def es_admin(user):
    return user.is_superuser

@never_cache
@login_required
@user_passes_test(es_admin)
def index(request):
    if request.method == 'POST':
        form = TecnicoForm(request.POST)
        if form.is_valid():
            form.save()
            messages.success(request, 'Técnico registrado correctamente.')
            return redirect('index')
    else:
        form = TecnicoForm()

    tecnicos = Tecnico.objects.all()
    return render(request, 'tecnicos/index.html', {
        'form': form,
        'tecnicos': tecnicos
    })


@never_cache
@login_required
@user_passes_test(es_admin)
def editar(request, id):
    tecnico = get_object_or_404(Tecnico, id=id)
    form = TecnicoForm(request.POST or None, instance=tecnico)

    if form.is_valid():
        form.save()
        messages.success(request, 'Datos actualizados.')
        return redirect('index')

    return render(request, 'tecnicos/editar.html', {'form': form})


@never_cache
@login_required
@user_passes_test(es_admin)
def eliminar(request, id):
    tecnico = get_object_or_404(Tecnico, id=id)
    tecnico.delete()
    messages.success(request, 'Técnico eliminado exitosamente.')
    return redirect('index')


@login_required
def listado(request):
    tecnicos = Tecnico.objects.all()
    return render(request, 'tecnicos/listado.html', {
        'tecnicos': tecnicos
    })
