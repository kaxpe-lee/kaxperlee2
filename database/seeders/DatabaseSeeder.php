<?php

namespace Database\Seeders;

use App\Models\Enlace;
use App\Models\Libro;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $enlace = new Enlace();
        $enlace->Nombre = 'Pexel';
        $enlace->Direccion = 'pexels.com/';
        $enlace->Etiquetas = 'recursosweb';
        $enlace->Descripcion = 'Págimna de recursos: fotos, videos, texturas y fondos';
        $enlace->save();

        $enlace2 = new Enlace();
        $enlace2->Nombre = 'Lectu Epub Gratis';
        $enlace2->Direccion = 'lectuepubgratis.com';
        $enlace2->Etiquetas = 'epub';
        $enlace2->Descripcion = 'Pagina para descargar libros electrónicos';
        $enlace2->save();

        $enlace3 = new Enlace();
        $enlace3->Nombre = 'Epub gratis';
        $enlace3->Direccion = 'epubgratis.vip';
        $enlace3->Etiquetas = 'epub';
        $enlace3->Descripcion = 'Página para descargar libros electrónicos';
        $enlace3->save();

        $enlace4 = new Enlace();
        $enlace4->Nombre = 'Mundo epub gratis 2';
        $enlace4->Direccion = 'mundoepubgratis2';
        $enlace4->Etiquetas = 'recursosweb';
        $enlace4->Descripcion = 'Página para descargar libros electrónicos';
        $enlace4->save();

        $enlace5 = new Enlace();
        $enlace5->Nombre = 'Bajar ebooks';
        $enlace5->Direccion = 'bajarebooks.org';
        $enlace5->Etiquetas = 'epub';
        $enlace5->Descripcion = 'Descarga de libros electrónicos';
        $enlace5->save();
    }
}
