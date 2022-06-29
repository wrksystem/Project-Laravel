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
                <form action="{{ route('user.update',$user->id)  }}" method="post" class="dataProf">
                    @csrf
                    <div class="name">
                        <label for="">Email</label>
                        <input type="email" value="{{$user->email}}" disabled>
                    </div>
                    <div class="name">
                        <label for="">Nome Completo</label>
                        <input type="text" value="{{$user->name.' '.$user->last_name}}" disabled>
                    </div>
                    <div class="name">
                        <label for="">CPF</label>
                        <input type="text" value="{{$user->cpf}}" disabled>
                    </div>
                    <div class="name">
                        <label for="">Rua/Avenida</label>
                        <input type="text" name="street" value="{{$user->street}}">
                    </div>
                    <div class="name">
                        <label for="">Numero</label>
                        <input type="number " name="houseNumber" value="{{$user->houseNumber}}" >
                    </div>
                    <div class="name">
                        <label for="">Bairro</label>
                        <input type="text" name="district" value="{{$user->district}}">
                    </div>
                    <div class="name">
                        <label for="">Cidade</label>
                        <input type="text" name="city" value="{{$user->city}}">
                    </div>
                    <div class="name">
                        <label for="">CEP</label>
                        <input type="text" name="zipcode" value="{{$user->zipcode}}">
                    </div>
                    <div id="select">
                        <label for=""><strong>Selecione o Estado</strong></label>
                        <select name="state" id="">
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                        </select>
                    </div>
                    <div class="name">
                        <label for="">Renda</label>
                        <input type="text" name="income_value" value="{{ $user->income_value }}">
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
