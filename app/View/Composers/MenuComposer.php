<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Material;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('menuMaterials', Material::withCount('courses')->whereHas('courses')->pluck('name', 'id'));
        // $view->with('menuInstitutions', Institution::withCount('courses')->whereHas('courses')->pluck('name', 'id'));
    }
}
