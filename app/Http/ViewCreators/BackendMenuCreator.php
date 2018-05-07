<?php

namespace App\Http\ViewCreators;

use Illuminate\View\View;

class BackendMenuCreator
{

    /**
     * The user model.
     *
     * @var \App\User;
     */
    protected $user;

    /**
     * Create a new menu bar composer.
     */
    public function __construct()
    {
        $this->user = auth()->user();
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function create(View $view)
    {
        $menu[] = [
            'class' => false,
            'route' => url('/home'),
            'icon'  => 'md md-home',
            'title' => 'Home'
        ];
        array_push($menu, [
            'class' => false,
            'route' => route('gallery.index'),
            'icon'  => 'md md-open-with',
            'title' => 'Gallery'
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('blog.index'),
            'icon'  => 'md md-accessibility',
            'title' => 'Blog'
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('work.index'),
            'icon'  => 'md md-star',
            'title' => 'Works'
        ]);
//        array_push($menu, [
//            'class' => false,
//            'route' => route('project.index'),
//            'icon'  => 'md md-web',
//            'title' => 'Projects'
//        ]);
//        array_push($menu, [
//            'class' => false,
//            'route' => route('career.index'),
//            'icon'  => 'md md-star',
//            'title' => 'Career'
//        ]);



//            array_push($menu, [
//                'class' => false,
//                'route' => route('user.index'),
//                'icon'  => 'md md-accessibility',
//                'title' => 'Users'
//            ]);
//
//            array_push($menu, [
//                'class' => false,
//                'route' => route('post.index'),
//                'icon'  => 'md md-web',
//                'title' => 'Posts'
//            ]);
//
//            array_push($menu, [
//                'class' => false,
//                'route' => route('contact.index'),
//                'icon'  => 'md md-perm-contact-cal',
//                'title' => 'Contact'
//            ]);
//
//            array_push($menu, [
//                'class' => false,
//                'route' => route('work.index'),
//                'icon'  => 'md md-group-work',
//                'title' => 'Work'
//            ]);
//
//            ?


//
//            array_push($menu, [
//                'class' => false,
//                'route' => route('team.index'),
//                'icon'  => 'md md-face-unlock',
//                'title' => 'Team'
//            ]);
//        array_push($menu, [
//            'class' => false,
//            'route' => route('media.index'),
//            'icon'  => 'md md-list',
//            'title' => 'Media'
//        ]);
//        array_push($menu, [
//            'class' => false,
//            'route' => route('notice.index'),
//            'icon'  => 'md md-list',
//            'title' => 'notice'
//        ]);



            //
            $view->with('allMenu', $menu);

    }
}