# Generated by Django 3.0.7 on 2020-12-16 12:06

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('SMP', '0008_auto_20201216_1722'),
    ]

    operations = [
        migrations.CreateModel(
            name='Announcement',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=150, unique=True)),
                ('official_link', models.URLField(blank=True)),
            ],
        ),
    ]