<template>
    <div class="page-body">
        <div class="py-2">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6>Create new </h6>
                        </div>
                        <div class="col-lg-6 text-end">
                            <div class="btns"><router-link :to="{ name: `All` }"
                                    class="btn rounded-pill btn-outline-warning router-link-active"><i
                                        class="fa fa-arrow-left me-5px"></i>
                                    Back
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-1">
                    <form class="user_create_form card">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="admin_form form_1">
                                        <div class="form-group d-grid align-content-start gap-1 mb-2">
                                            <div><label class="mb-2 text-capitalize">
                                                    Select user role
                                                </label>
                                                <div id="user_role_id" class="multiple_select_body">
                                                    <div class="multiple_select_data">
                                                        <div class="btn btn-sm btn-outline-danger">
                                                            no user role selected
                                                        </div>
                                                    </div>
                                                    <!---->
                                                    <div class="canvas_backdrop">
                                                        <!---->
                                                    </div>
                                                    <div class="canvas_backdrop">
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-grid align-content-start gap-1 mb-2">
                                            <div class="field_wrapper"><label for="first_name"
                                                    class="text-capitalize d-block"><span class="mb-2 d-block">
                                                        First Name
                                                    </span> <input type="text" id="first_name" name="first_name"
                                                        class="form-control">
                                                    <!---->
                                                </label>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="form-group d-grid align-content-start gap-1 mb-2">
                                            <div class="field_wrapper"><label for="last_name"
                                                    class="text-capitalize d-block"><span class="mb-2 d-block">
                                                        Last Name
                                                    </span> <input type="text" id="last_name" name="last_name"
                                                        class="form-control">
                                                    <!---->
                                                </label>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="form-group d-grid align-content-start gap-1 mb-2">
                                            <div class="field_wrapper"><label for="user_name"
                                                    class="text-capitalize d-block"><span class="mb-2 d-block">
                                                        User Name
                                                    </span> <input type="text" id="user_name" name="user_name"
                                                        class="form-control">
                                                    <!---->
                                                </label>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="form-group d-grid align-content-start gap-1 mb-2">
                                            <div class="field_wrapper"><label for="email"
                                                    class="text-capitalize d-block"><span class="mb-2 d-block">
                                                        Email
                                                    </span> <input type="email" id="email" name="email"
                                                        class="form-control">
                                                    <!---->
                                                </label>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="form-group d-grid align-content-start gap-1 mb-2">
                                            <div class="field_wrapper"><label for="mobile_number"
                                                    class="text-capitalize d-block"><span class="mb-2 d-block">
                                                        Mobile Number
                                                    </span> <input type="text" id="mobile_number" name="mobile_number"
                                                        class="form-control">
                                                    <!---->
                                                </label>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="form-group d-grid align-content-start gap-1 mb-2">
                                            <div class="field_wrapper"><label for="password"
                                                    class="text-capitalize d-block"><span class="mb-2 d-block">
                                                        Password
                                                    </span> <input type="password" id="password" name="password"
                                                        class="form-control">
                                                    <!---->
                                                </label>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="form-group d-grid align-content-start gap-1 mb-2">
                                            <div class="field_wrapper"><label for="password_confirmation"
                                                    class="text-capitalize d-block"><span class="mb-2 d-block">
                                                        confirm password
                                                    </span> <input type="password" id="password_confirmation"
                                                        name="password_confirmation" class="form-control">
                                                    <!---->
                                                </label>
                                                <!---->
                                            </div>
                                        </div>
                                        <div class="form-group d-grid align-content-start gap-1 mb-2">
                                            <div class="field_wrapper"><label for="photo"
                                                    class="text-capitalize d-block"><span class="mb-2 d-block">
                                                        photo
                                                    </span> <input type="file" accept="image/*" id="photo" name="photo"
                                                        multiple="multiple" class="form-control">
                                                    <!---->
                                                </label>
                                                <div class="file_preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center"><button type="button" class="btn btn-outline-info"><i
                                    class="fa fa-upload"></i>
                                Submit
                            </button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style></style>
