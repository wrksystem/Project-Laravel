<!DOCTYPE html>
<html lang="pt-br">
<head>

    <script src="https://kit.fontawesome.com/89c7a00266.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/user_area.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Usuário</title>

</head>
<body>

    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>

        </div>
        <div class="sidebar">
            <div class="profile">
                <img src="{{asset('assets/painel_usuario/img/user/1649164132323.jpg')}}" alt="profile_picture">
                <h3>{{$user->name.' '.$user->last_name}}</h3>
            </div>
            <ul>
                <li>
                    <a href="#" id="dashboard" onclick="abredash()">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">My Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="perfil" onclick="abreprof()">
                        <span class="icon"><i class="fas fa-address-card"></i></span>
                        <span class="item">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="adotar" onclick="abreadoc()">
                        <span class="icon"><i class="fas fa-cat"></i></span>
                        <span class="item">Adoção</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="pet" onclick="abrepet()">
                        <span class="icon"><i class="fas fa-paw"></i></span>
                        <span class="item">Pets</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('logout')}}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                        <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="item">Sair</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>



    </div>

    <div class="content">

        <section class="dashboard" id="dashboard-content">
            <p>Informações sobre animais que estão adotados e dados pessoais</p>
            <div class="data">

            </div>
        </section>

        <section class="profile" id="profile-content">
            <p>Dados pessoais para permitir adoção</p>
            <div class="prof">
                <form action="" class="dataProf">
                    <div class="name">
                        <label for="">Email</label>
                        <input type="text" value="{{$user->email}}">
                    </div>
                    <div class="name">
                        <label for="">Nome Completo</label>
                        <input type="text" value="{{$user->name.' '.$user->last_name}}">
                    </div>
                    <div class="name">
                        <label for="">CPF</label>
                        <input type="text" value="{{$user->cpf}}">
                    </div>
                    <div class="name">
                        <label for="">Rua/Avenida</label>
                        <input type="text" name="inputaddress">
                    </div>
                    <div class="name">
                        <label for="">Numero</label>
                        <input type="text">
                    </div>
                    <div class="name">
                        <label for="">Bairro</label>
                        <input type="text">
                    </div>
                    <div class="name">
                        <label for="">Cidade</label>
                        <input type="text">
                    </div>
                    <div class="name">
                        <label for="">CEP</label>
                        <input type="text">
                    </div>
                    <div id="select">
                        <label for=""><strong>Selecione o Estado</strong></label>
                        <select name="" id="">
                            <option value="">AC</option>
                            <option value="">AL</option>
                            <option value="">AP</option>
                            <option value="">AM</option>
                            <option value="">BA</option>
                            <option value="">CE</option>
                            <option value="">DF</option>
                            <option value="">ES</option>
                            <option value="">GO</option>
                            <option value="">MA</option>
                            <option value="">MT</option>
                            <option value="">MS</option>
                            <option value="">MG</option>
                            <option value="">PA</option>
                            <option value="">PB</option>
                            <option value="">PR</option>
                            <option value="">PE</option>
                            <option value="">PI</option>
                            <option value="">RJ</option>
                            <option value="">RN</option>
                            <option value="">RS</option>
                            <option value="">RO</option>
                            <option value="">RR</option>
                            <option value="">SC</option>
                            <option value="">SP</option>
                            <option value="">SE</option>
                            <option value="">TO</option>
                        </select>
                    </div>
                    <div class="name">
                        <label for="">Renda</label>
                        <input type="text" name="inputvalue">
                    </div>

                    <div class="confirm">
                        <button type="submit">SALVAR</button>
                    </div>
                </form>
            </div>
        </section>

        <section class="adocao" id="adocao-content">
            <p>Requerimento de adoção e ja adotados</p>
            <div>
                <section class="allpets">
                    <p>Imagens dos pets cadastrados</p>

                </section>
                <section class="adoption-application">
                    <form action="">

                    </form>
                </section>
            </div>
        </section>

        <section class="pets" id="pets-content">
            <p>Pets e suas informações</p>
            <div class="pets-conteudo">
                <div class="profile">
                    <img src="{{asset('assets/img/portfolio/slide1.jpg')}}" alt="pet_picture">
                    <h3>Nome do Pet</h3>
                </div>
                <div class="dataPets">
                    <div class="name">
                        <label for="">Nome</label>
                        <input type="text">
                    </div>
                    <div class="dataPetsInfo">
                        <label for="">Peso</label>
                        <input type="text">
                        <label for="">Altura</label>
                        <input type="text">
                        <label for="">Genero</label>
                        <input type="text">
                        <label for="">Cor</label>
                        <input type="text">
                        <label for="">Idade</label>
                        <input type="text">
                    </div>

                </div>
            </div>
        </section>
    </div>
  <script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>

  <script>
    document.getElementById("profile-content").style.visibility = "hidden";
    document.getElementById("adocao-content").style.visibility = "hidden";
    document.getElementById("pets-content").style.visibility = "hidden";

      function abredash (){
        document.getElementById("dashboard-content").style.visibility = "visible";
        document.getElementById("profile-content").style.visibility = "hidden";
        document.getElementById("adocao-content").style.visibility = "hidden";
        document.getElementById("pets-content").style.visibility = "hidden";
      }

      function abreprof (){
        document.getElementById("profile-content").style.visibility = "visible";
        document.getElementById("dashboard-content").style.visibility = "hidden";
        document.getElementById("adocao-content").style.visibility = "hidden";
        document.getElementById("pets-content").style.visibility = "hidden";
      }

      function abreadoc (){
        document.getElementById("adocao-content").style.visibility = "visible";
        document.getElementById("dashboard-content").style.visibility = "hidden";
        document.getElementById("profile-content").style.visibility = "hidden";
        document.getElementById("pets-content").style.visibility = "hidden";
      }

      function abrepet (){
        document.getElementById("pets-content").style.visibility = "visible";
        document.getElementById("dashboard-content").style.visibility = "hidden";
        document.getElementById("profile-content").style.visibility = "hidden";
        document.getElementById("adocao-content").style.visibility = "hidden";
      }


  </script>
</body>
</html>
