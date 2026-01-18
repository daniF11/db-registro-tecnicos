from django.db import models

# Create your models here.
class Tecnico(models.Model):
    codigo = models.CharField(
        max_length=20,
        unique=True,
        verbose_name="Código del Técnico"
        )
    dni = models.CharField(
        max_length=15,
        verbose_name="DNI del Técnico"
        )
    nombres = models.CharField(
        max_length=100
    )
    apellidos = models.CharField(
        max_length=100
    )
    nivel = models.CharField(
        max_length=20,
        default="Auxiliar",
    )
    fecha_registro = models.DateField(
        auto_now_add=True
    )
    
    def __str__ (self):
        return f"{self.codigo} - {self.nombres} {self.apellidos}"