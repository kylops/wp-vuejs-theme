<template>
    <div class="uk-container uk-container-expand">
        <nav class="" uk-navbar>
            <div class="uk-navbar-left">

                <a class="uk-navbar-item uk-logo" href="#">Logo</a>

            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-iconnav">
                    <li>
                        <router-link :to="{ path: '/' }">
                            <span class="uk-icon uk-margin-small-right" uk-icon="icon: home"></span>
                            Home
                        </router-link>
                    </li>
                    <li>
                        <router-link :to="{ path: '/blog' }">
                            <span class="uk-icon uk-margin-small-right" uk-icon="icon: album"></span>
                            Blog
                        </router-link>
                    </li>

                </ul>

                <div class="uk-navbar-item">
                    <form action="javascript:void(0)">
                        <input class="uk-input uk-form-width-small" type="text" placeholder="Input">
                        <button class="uk-button uk-button-default">Search</button>
                    </form>
                </div>


            </div>
        </nav>
    </div>

</template>

<script>
    export default {
        created() {
            this.getPages();
        },
        data: () => ({
          pages: [],
          errors: []
        }),
        methods: {
            getPages() {
                axios.get('http://www.vv3schools.dev/wp-json/wp/v2/posts').then((response) => {
                  this.pages = response.data
                })
                .catch(e => {
                    this.errors.push(e)
                });
            }
        }
    }
</script>
<style lang="css">
nav{
    position:fixed;
}
</style>
