<?php

namespace Marley71\Cupparis\App\Site\Policies;

use App\Models\User;
use App\Models\CupSitePage;
use Illuminate\Auth\Access\HandlesAuthorization;
use Gecche\PolicyBuilder\Facades\PolicyBuilder;

class CupSiteSettingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CupPage  $model
     * @return mixed
     */
    public function view(User $user, CupPage $model)
    {
        //
        if ($user && $user->can('view cup_page')) {
            return true;
        }

        return false;

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        if ($user && $user->can('create cup_page')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CupPage  $model
     * @return mixed
     */
    public function update(User $user, CupPage $model)
    {
        //
        if ($user && $user->can('edit cup_page')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CupPage  $model
     * @return mixed
     */
    public function delete(User $user, CupPage $model)
    {
        //
        if ($user && $user->can('delete cup_page')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can access to the listing of the models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function listing(User $user)
    {
        //
        if ($user && $user->can('list cup_page')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can access to the listing of the models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function acl(User $user, $builder)
    {

//        if ($user && $user->can('view all cup_geo_comune')) {
//            return Gate::aclAll($builder);
//        }

        if ($user && $user->can('view cup_page')) {
            return PolicyBuilder::all($builder,CupPage::class);
        }

        return PolicyBuilder::none($builder,CupPage::class);
    }
}
