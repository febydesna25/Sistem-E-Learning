<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" >E-Learning</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                      <form action="/logout" method="post">
                        @csrf
                        <button style="background-color:#4682B4" class="btn btn-dark" type="submit"><i class="fas fa-sign-out-alt"> Logout</i></button>
                    </form>
                </div>
            </div>  
        </li>
    </ul>
</div>
</nav>
</div>