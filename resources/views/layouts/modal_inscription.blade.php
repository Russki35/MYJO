<!-- MODAL INSCRIPTION -->
<div class="modal fade" id="inscription" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Inscription</h4>
            </div>
            <div class="modal-body">
                <form class="login_form m_bottom_20" method="post" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <ul>
                        <li class="m_bottom_10 relative">
                            <i class="icon-user-1 login_icon fs_medium color_grey_light_2"></i>
                            <input type="text" placeholder="Prénom" id="name" name="name" class="r_corners color_grey w_full fw_light" value="{{ old('name') }}" required autofocus>
                            <span id="form-errors-name" class="color_red"></span>
                        </li>

                        <li class="m_bottom_10 relative">
                            <i class="icon-user-1 login_icon fs_medium color_grey_light_2"></i>
                            <input type="text" placeholder="Nom" id="lastname" name="lastname" class="r_corners color_grey w_full fw_light" value="{{ old('lastname') }}" required autofocus>
                            <span id="form-errors-name" class="color_red"></span>
                        </li>

                        <li class="m_bottom_10 relative">
                            <i class="icon-mail-1 login_icon fs_medium color_grey_light_2"></i>
                            <input type="email" placeholder="Email" id="email" name="email" class="r_corners color_grey w_full fw_light" value="{{ old('email') }}" required>
                            <span id="form-errors-email" class="color_red"></span>
                        </li>
                        <li class="m_bottom_10 relative">
                            <i class="icon-lock login_icon fs_medium color_grey_light_2"></i>
                            <input type="password" placeholder="Mot de passe" id="password" name="password" class="r_corners color_grey w_full fw_light" required>
                            <span id="form-errors-password" class="color_red"></span>
                        </li>

                        <li class="m_bottom_10 relative">
                            <i class="icon-lock login_icon fs_medium color_grey_light_2"></i>
                            <input type="password" placeholder="Confirmer le mot de passe" id="password-confirm" name="password_confirmation" class="r_corners color_grey w_full fw_light">
                            <span id="form-errors-password" class="color_red"></span>
                        </li>
                        <li class="m_bottom_23">
                            <input type="checkbox" checked id="checkbox_1" name="" class="d_none">
                            <label for="checkbox_1" class="d_inline_m fs_medium fw_light">En cochant cette case, vous acceptez les conditions générales</label>
                        </li>
                        <li class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                <input type="submit" name="inscription" class="button_type_5 tr_all color_blue transparent fs_medium r_corners" value="S'inscrire">
                                <!-- <button class="button_type_5 tr_all color_blue transparent fs_medium r_corners">S'inscrire</button> -->
                            </div>

                        </li>
                    </ul>
                </form>
                <div class="bg_light_2 im_half_container sc_footer">
                    Déjà inscrit ? <a href="#" data-toggle="modal" data-target="#connexion" class="color_scheme color_purple_hover fs_small">Se connecter</a><br>

                </div>
            </div>
        </div>

    </div>

</div>