@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col 12 d-flex">
                <div class="col-2">
                    <div class="container-fluid">
                        <div class="row flex-nowrap">
                            <div class="col-12 px-sm-2 px-0 bg-dark">
                                <div
                                    class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white vh-100">
                                    <a href="/"
                                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                                    </a>
                                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                                        id="menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link align-middle px-0">
                                                <i class="fs-4 bi-house"></i> <span
                                                    class="ms-1 d-none d-sm-inline">Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#submenu1" data-bs-toggle="collapse"
                                                class="nav-link px-0 align-middle">
                                                <i class="fs-4 bi-speedometer2"></i> <span
                                                    class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                                            <ul class="collapse show nav flex-column ms-1" id="submenu1"
                                                data-bs-parent="#menu">
                                                <li class="w-100">
                                                    <a href="{{ route('admin.projects.index') }}" class="nav-link px-0">
                                                        <span class="d-none d-sm-inline">Project</span></a>
                                                </li>
                                                <li class="w-100">
                                                    <a href="{{ route('admin.projects.create') }}" class="nav-link px-0">
                                                        <span class="d-none d-sm-inline">Create New Project</span></a>
                                                </li>
                                                <li class="w-100">
                                                    <a href="{{ route('admin.types.index') }}" class="nav-link px-0">
                                                        <span class="d-none d-sm-inline">Types</span></a>
                                                </li>
                                                <li class="w-100">
                                                    <a href="{{ route('admin.types.create') }}" class="nav-link px-0">
                                                        <span class="d-none d-sm-inline">Create New Type</span></a>
                                                </li>
                                                <li class="w-100">
                                                    <a href="{{ route('admin.technologies.index') }}" class="nav-link px-0">
                                                        <span class="d-none d-sm-inline">Technologies</span></a>
                                                </li>
                                                <li class="w-100">
                                                    <a href="{{ route('admin.technologies.create') }}"
                                                        class="nav-link px-0">
                                                        <span class="d-none d-sm-inline">Create New Technology</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="dropdown pb-4">
                                        <a href="#"
                                            class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="https://avatars.githubusercontent.com/u/146130373?v=4" alt="hugenerd"
                                                width="30" height="30" class="rounded-circle">
                                            <span class="d-none d-sm-inline mx-1">loser</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                            <li><a class="dropdown-item" href="#">New project...</a></li>
                                            <li><a class="dropdown-item" href="#">Settings</a></li>
                                            <li><a class="dropdown-item" href="#">Profile</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="container">
                        <h2 class="fs-4 text-secondary my-4">
                            {{ __('Dashboard') }}
                        </h2>
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">{{ __('My Dashboard') }}</div>

                                    <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        {{ __('Ti sei loggato con successo!') }}
                                        <h1 class="mt-3 text-center">Benvenuto... </h1>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <a href="{{ route('admin.projects.index') }}"
                                                    class="btn btn-sm btn-primary float-end mb-4">Vedi
                                                    progetti</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
