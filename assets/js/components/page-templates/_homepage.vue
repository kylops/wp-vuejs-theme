<template>
    <div class="page">
        <site-header></site-header>
        <post-list></post-list>

        <h1 class="entry-title">{{ page.title.rendered }}</h1>

        <div class="entry-content">
            {{{ page.content.rendered }}}
        </div>
    </div>
</template>

<script>
    export default {
        ready() {
            this.getPage();
        },
        data() {
            return {
                page: {
                    id: 0,
                    slug: '',
                    title: { rendered: '' },
                    content: { rendered: '' }
                }
            }
        },
        methods: {
            getPage() {
                this.axios.get(wp.root + 'wp/v2/pages/' + this.$route.postId).then(function(response) {
                    this.page = response.data;
                    this.$dispatch('page-title', this.page.title.rendered);
                }, function(response) {
                    console.log(response);
                });
            }
        },
        route: {
            canReuse() {
                return false;
            }
        }
    }
</script>
<style lang="css">
    #bg-full{
        height: 100vh;
    }
</style>
