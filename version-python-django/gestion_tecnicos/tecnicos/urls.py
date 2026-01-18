from django.urls import path
from .views import index
from . import views

urlpatterns = [
    path('', index, name='index'),
    path('editar/<int:id>/', views.editar, name='editar'),
    path('eliminar/<int:id>/', views.eliminar, name='eliminar'),
]