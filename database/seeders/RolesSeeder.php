<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



    public function run()
    {
        $role= new Role();
        $role->name="Editorial Design Manager";
        $role->description="Responsabile di progettazione editoriale";
        $role->key=Role::ROLE_EDITORIAL_DESIGN_MANAGER;
        $role->save();

        $role= new Role();
        $role->name="Editorial Director";
        $role->description="Direttore editoriale";
        $role->key=Role::ROLE_EDITORIAL_DIRECTOR;
        $role->save();

        $role= new Role();
        $role->name="Editorial Responsible";
        $role->description="Responsabile di Progettazione";
        $role->key=Role::ROLE_EDITORIAL_RESPONSIBLE;
        $role->save();

        $role= new Role();
        $role->name="CEO";
        $role->description="Amministratore delegato";
        $role->key=Role::ROLE_CEO;
        $role->save();

        $role= new Role();
        $role->name="Marketing & Sales director";
        $role->description="Direttore Sales & Marketing";
        $role->key=Role::ROLE_SALES_DIRECTOR;
        $role->save();

        $role= new Role();
        $role->name="Admin";
        $role->description="Admin";
        $role->key=Role::ROLE_ADMIN;
        $role->save();
    }
}
