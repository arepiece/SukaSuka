<template>
    <div>
        <div class="form-group">
            <router-link to="/" class="btn btn-default">Back</router-link>
        </div>
 
        <div class="panel panel-default">
            <div class="panel-heading">Create new company</div>
            <div class="panel-body">
                <form v-on:submit="saveForm()">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Company name</label>
                            <input type="text" v-model="company.name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Company address</label>
                            <input type="text" v-model="company.address" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Company website</label>
                            <input type="text" v-model="company.website" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Company email</label>
                            <input type="text" v-model="company.email" class="form-control">
                        </div>
                         <span v-if="allerros.email" :class="['label label-danger']">@{{ allerros.email }}</span>
                          <span v-if="allerros.name" :class="['label label-danger']">@{{ allerros.name[0] }}</span>
                           <span v-if="allerros.address" :class="['label label-danger']">@{{ allerros.address[0] }}</span>
                            <span v-if="allerros.website" :class="['label label-danger']">@{{ allerros.website[0] }}</span>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <button class="btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data: function () {
            return {
                company: {
                    name: '',
                    address: '',
                    website: '',
                    email: '',
                },
                allerros: [],
                
            }
        },
        methods: {
            saveForm() {
                event.preventDefault();
                var app2 = this;
                var newCompany = app.company;
                axios.post('/haffiztest/public/api/v1/companies', newCompany)
                    .then(function (resp) {
//                        console.log(resp);
                        app.$router.push({path: '/'});
                    })
                    .catch(function (error) {
//                        console.log(error);
        console.log(this);                
        app2.allerros = error.response.data.errors;
                        console.log(this.allerros);
//                        alert("Could not create your company");
                    });
            }
        }
    }
</script>
