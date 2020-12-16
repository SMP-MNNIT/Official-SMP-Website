# Generated by Django 3.0.7 on 2020-12-16 11:00

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('SMP', '0006_events_upload'),
    ]

    operations = [
        migrations.CreateModel(
            name='Department',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=100, unique=True)),
                ('description', models.TextField(blank=True)),
                ('upload', models.ImageField(default='blog/club/', upload_to='blog/club/')),
                ('official_link', models.URLField(blank=True)),
            ],
        ),
    ]