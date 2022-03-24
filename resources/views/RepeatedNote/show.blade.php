@extends('layouts.app')

@section('content')

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
               <div class="sidebar-header">
                   <div class="d-flex justify-content-between">
                        <div class="logo">
                            <h2 class="">Osboha180</h2>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                  </div>  
             </div> 
                <div class="sidebar-menu">
                    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
                </div>
           </div>

            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
            </div>
        </div>
      </div>
 </body>

