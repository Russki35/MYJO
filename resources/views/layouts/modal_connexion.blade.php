<!-- MODAL INSCRIPTION -->
<div class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Connexion</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('login') }}" method="post" class="login_form m_bottom_20" id="loginForm">
                    {{ csrf_field() }}
                    <ul>
                        <li class="m_bottom_10 relative">
                            <i class="icon-mail-1 login_icon fs_medium color_grey_light_2"></i>
                            <input type="email" placeholder="Email" id="email" name="email" class="r_corners color_grey w_full fw_light">
                            <span id="form-errors-email" class="color_red"></span>
                        </li>
                        <li class="m_bottom_10 relative">
                            <i class="icon-lock login_icon fs_medium color_grey_light_2"></i>
                            <input type="password" placeholder="Mot de passe" id="password" name="password" class="r_corners color_grey w_full fw_light">
                            <span id="form-errors-password" class="color_red"></span>
                        </li>
                        <li class="m_bottom_23">
                            <input type="checkbox" checked id="checkbox_1" name="remember" {{ old('remember') ? 'checked' : '' }} class="d_none">
                            <label for="checkbox_1" class="d_inline_m fs_medium fw_light">Se souvenir de moi</label>
                        </li>
                        <li class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                <input type="submit" name="login" class="button_type_5 tr_all color_blue transparent fs_medium r_corners" value="Se connecter">
                                <!-- <button class="button_type_5 tr_all color_blue transparent fs_medium r_corners">Se connecter</button> -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8 t_align_r lh_medium">
                                <a href="{{ route('password.request') }}" class="color_scheme color_purple_hover fs_small">Mot de passe oublié ?</a><br>
                                <a href="#" class="color_scheme color_purple_hover fs_small">Email oublié ?</a>
                            </div>
                        </li>
                    </ul>
                </form>
                <div class="bg_light_2 im_half_container sc_footer">
                    <h5 class="fw_light color_dark d_inline_m half_column">Pas encore inscrit ?</h5>
                    <div class="half_column t_align_r d_inline_m">
                        <a href="#" data-toggle="modal" data-target="#inscription" class="button_type_5 t_xs_align_c d_inline_b tr_all r_corners color_purple transparent fs_medium">Créer un compte</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>