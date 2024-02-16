<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Tarea;

class TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tarea = new Tarea();
        $tarea->titulo_tarea = "Caminata Matutina";
        $tarea->descripcion_tarea = "Da un paseo revitalizante al aire libre para empezar el día con energía positiva.";
        $tarea->tipo = "1";
        $tarea->categoria = "2";
        $tarea->puntos = "1";
        $tarea->creador = "Antoni";
        $tarea->save();

        $tarea = new Tarea();
        $tarea->titulo_tarea = "Rutina de Estiramientos";
        $tarea->descripcion_tarea = "Dedica tiempo a estirar tus músculos para mejorar la flexibilidad y reducir la tensión.";
        $tarea->tipo = "1";
        $tarea->categoria = "2";
        $tarea->puntos = "1";
        $tarea->creador = "Antoni";
        $tarea->save();

        $tarea = new Tarea();
        $tarea->titulo_tarea = "Entrenamiento de 7 Minutos";
        $tarea->descripcion_tarea = "Realiza una breve sesión de ejercicios que incluya saltos, flexiones y abdominales para un impulso rápido pero efectivo.";
        $tarea->tipo = "1";
        $tarea->categoria = "2";
        $tarea->puntos = "1";
        $tarea->creador = "Antoni";
        $tarea->save();

        $tarea = new Tarea();
        $tarea->titulo_tarea = "Yoga Ligero";
        $tarea->descripcion_tarea = "Practica algunas posturas simples para mejorar la fuerza y la concentración, mientras relajas tu mente.";
        $tarea->tipo = "1";
        $tarea->categoria = "2";
        $tarea->puntos = "1";
        $tarea->creador = "Antoni";
        $tarea->save();

        $tarea = new Tarea();
        $tarea->titulo_tarea = "Correr en el Sitio";
        $tarea->descripcion_tarea = "Una forma sencilla de elevar tu ritmo cardíaco en cualquier lugar.";
        $tarea->tipo = "1";
        $tarea->categoria = "2";
        $tarea->puntos = "1";
        $tarea->creador = "Antoni";
        $tarea->save();

        $tarea = new Tarea();
        $tarea->titulo_tarea = "Batido Nutritivo";
        $tarea->descripcion_tarea = "Mezcla frutas frescas, yogur natural y una cucharada de avena para un batido lleno de vitaminas y fibra.";
        $tarea->tipo = "1";
        $tarea->categoria = "1";
        $tarea->puntos = "1";
        $tarea->creador = "Antoni";
        $tarea->save();
    }
}
