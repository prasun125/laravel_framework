<template>
	<div>
		<div class="form-group">
			<router-link to="/" class="btn btn-outline-primary">
				Back
			</router-link>
		</div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ title }}
                    </div>
                    <div class="card-body">
                        <form v-on:submit="saveForm()">
                            <div class="form-group">
                                <label for="exampleInputCompanyName">
                                    Company name
                                </label>
                                <input type="text" class="form-control" id="exampleInputCompanyName" aria-describedby="companyNameHelp" v-model="company.name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCompanyAddress">
                                    Company address
                                </label>
                                <input type="text" class="form-control" id="exampleInputCompanyAddress" aria-describedby="companyAddressHelp" v-model="company.address">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCompanyWebsite">
                                    Company website
                                </label>
                                <input type="text" class="form-control" id="exampleInputCompanyWebsite" aria-describedby="companyWebsiteHelp" v-model="company.website">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">
                                    Company email
                                </label>
                                <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="companyEmailHelp" v-model="company.email">
                            </div>
                            <button type="submit" class="btn btn-outline-primary">
                                Create
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</div>
</template>

<script>
	export default {
		name: "CompanyCreate",
		data: function () {
			return {
                title: 'Create new company',
				company: {
					name: '',
					address: '',
					website: '',
					email: '',
				}
			}
		},
		methods: {
			saveForm() {
				event.preventDefault();
				let app = this;
				let newCompany = app.company;
				axios.post('/api/companies', newCompany)
					.then(function (resp) {
						app.$router.push({
							path: '/'
						});
					})
					.catch(function (resp) {
						console.log(resp);
						alert("Could not create your company");
					});
			}
		}
	}
</script>

<style scoped>

</style>
