from django.shortcuts import render, redirect, get_object_or_404
from .models import Tecnico
from .forms import TecnicoForm
from django.contrib import messages
from django.contrib.auth.decorators import login_required
from django.views.decorators.cache import never_cache

@never_cache
@login_required
def index(request):
    tecnicos = Tecnico.objects.all().order_by('-fecha_registro')

    if request.method == 'POST':
        form = TecnicoForm(request.POST)
        if form.is_valid():
            form.save()
            messages.success(request, 'Técnico agregado exitosamente.')
            return redirect('index')
    else:
        form = TecnicoForm()

    context = {
        'form': form,
        'tecnicos': tecnicos
    }
    return render(request, 'tecnicos/index.html', context)

@never_cache
@login_required
def editar(request, id):
    tecnico = get_object_or_404(Tecnico, id=id)

    if request.method == 'POST':
        form = TecnicoForm(request.POST, instance=tecnico)
        if form.is_valid():
            form.save()
            messages.success(request, 'Técnico actualizado exitosamente.')
            return redirect('index')
    else:
        form = TecnicoForm(instance=tecnico)

    return render(request, 'tecnicos/editar.html', {
        'form': form,
        'tecnico': tecnico
    })

@never_cache
@login_required
def eliminar(request, id):
    tecnico = get_object_or_404(Tecnico, id=id)
    tecnico.delete()
    messages.success(request, 'Técnico eliminado exitosamente.')
    return redirect('index')