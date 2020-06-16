<template>
	<div>
		<div class="form-group">
			<router-link :to="{name: 'createCompany'}" class="btn btn-outline-primary">
				Create new company
			</router-link>
		</div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ title }}
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Website</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(company, index) in companies">
                                    <td>{{ company.name }}</td>
                                    <td>{{ company.address }}</td>
                                    <td>{{ company.website }}</td>
                                    <td>{{ company.email }}</td>
                                    <td>
                                        <router-link :to="{name: 'editCompany', params: {id: company.id}}"
                                                     class="btn btn-outline-primary">
                                            Edit
                                        </router-link>
                                        <a href="#" class="btn btn-outline-danger" v-on:click="deleteEntry(company.id, index)">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	</div>
</template>

<script>
	export default {
		name: "CompanyIndex",
		data: function () {
			return {
			    title: 'Companies',
				companies: []
			}
		},
		mounted() {
			let app = this;
			axios.get('/api/companies')
				.then(function (resp) {
					app.companies = resp.data;
				})
				.catch(function (resp) {
					console.log(resp);
					alert("Could not load companies");
				});
		},
		methods: {
			deleteEntry(id, index) {
				if (confirm("Do you really want to delete it?")) {
					let app = this;
					axios.delete('/api/companies/' + id)
						.then(function (resp) {
							app.companies.splice(index, 1);
						})
						.catch(function (resp) {
							alert("Could not delete company");
						});
				}
			}
		}
	}
</script>

<style scoped>

</style>
