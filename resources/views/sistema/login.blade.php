<!doctype html>
<html lang="en">

    
    <head>
    
        <meta charset="utf-8" />
        <title>Amauri Contabilidade - Sistema</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('site/assets/img/favicon.ico') }}" type="image/x-icon"/>
        <meta content="jpedrols" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
    
        <!-- Bootstrap Css -->
        <link href="{{ asset('sistema/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('sistema/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('sistema/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    
    </head>

    <body>

        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Acesso sistema</h5>
                                            <p>Todas as tentativas de login estão sendo monitoradas.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="auth-logo">
                                    <a href="{{ route('site.index') }}" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ asset('site/assets/img/favicon.ico') }}" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="{{ route('site.index') }}" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ asset('site/assets/img/favicon.ico') }}" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="POST" action="{{ route('sistema.logar') }}">

                                        @csrf
        
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Usuário</label>
                                            <input type="text" class="form-control" name="usuario" id="username" placeholder="Informe o login">
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label">Senha</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input name="senha" type="password" class="form-control" placeholder="Informe a senha" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Acessar</button>
                                        </div>

                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                            <div>
                                <p>© <script>document.write(new Date().getFullYear())</script> Desenvolvido por 🤖 <a href="https://github.com/jpedrols" target="_blank">@jpedrols</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Feb 2021 12:51:15 GMT -->
</html>
