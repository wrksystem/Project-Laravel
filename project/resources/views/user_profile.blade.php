@extends("template_usuario")
@section("content")
<div class="row">
    <div class="col-md-8">
        <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Editar Perfil</h4>
            <p class="card-category">Complete seu Perfil</p>
        </div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Company (disabled)</label>
                    <input type="text" class="form-control" disabled="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Username</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Email</label>
                        <input type="email" class="form-control">
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Nome</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Sobrenome</label>
                    <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Endereço</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Cidade</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">País</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">CEP</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>About Me</label>
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
            <div class="clearfix"></div>
        </form>
        </div>
        </div>
    </div>
    <div class="col-md-4">
    <div class="card card-profile">
    <div class="card-avatar">
        <a href="javascript:;">
            <img class="img" src="../assets/img/faces/marc.jpg">
        </a>
    </div>
    <div class="card-body">
        <h6 class="card-category text-gray">CEO / Co-Founder</h6>
        <h4 class="card-title">Alec Thompson</h4>
        <p class="card-description">
        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
        </p>
        <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
    </div>
    </div>
    </div>
    </div>
@endsection
