<template>
    <div>
        <h2>- Liste des commentaires - Vue</h2>
        <hr>

       <div v-if="comments.length > 0">
            <div v-for="comment in comments">

                <div class="bg-white shadow-md wfull p-4 my-4">
                    <h3 class="font-bold text-grey-900">{{ comment.author }}</h3>
                    <br>
                    <p class="tex-gray-600 text-sm">
                             {{ comment.content }}
                    </p>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data: function () {
            return {
                comments: [],
            }
        },
        props: ['post_id'],
        mounted() {
            console.log(this.post_id);
            console.log('Component comments mounted')
            this.getPost();

        },
        methods: {
            getPost() {
                axios.get('http:127.0.0.1:8000/api/articles/' + this.post_id)
                    .then(response => (this.info = response))
/*
                    .then(response => (this.comments = response.data));
*/
                    }
            }
    }
</script>
