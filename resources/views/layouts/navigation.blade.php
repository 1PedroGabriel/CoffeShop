<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>
    nav{
        height: 90px;
    
    }

    .dropdown-menu {
        position: absolute;
        box-shadow: 0 0 2px black;
        display: none;
        padding: 20px;
        height: 500px;
    }

    .dropdown-menu a{
        display: block;
        color: black;
      
    }

    .main-section-home {
        transition-duration: 1s;
    }

    .main-section-home:hover {
        margin: 0 20px;
        transition-duration: 1s;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .main-div-home {
        margin: auto;
        width: 80%;
    }
    .div-product {
        margin: auto;
        
        width: 500px;
        height:100px;
        box-shadow: 0 0 3px black;

    }



</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light"> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span> 
    </button> 
        
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/dashboard"> Home 
                        <span class="sr-only">(current)</span>
                    </a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/sobre">Nosso café</a>
                </li> 
            </ul> 
            
            <ul>

                <li class="dropdown">
                    
                    <a href="#">
                        
                        {{ Auth::user()->name}}
                        

                    </a>

                    <div class="dropdown-menu">

                        <a href="/profile/edit">Perfil</a>
                        <form action="/logout" method="POST">
                            @csrf
                            <button>Sair</button>

                        </form>

                    </div>

                </li>


            </ul>
        
        </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
 

  