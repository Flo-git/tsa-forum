<template>
    <div>
        <h2>- Liste des commentaires - Vue</h2>
        <hr>
<!--        <div v-if="!chargement" v-for="comment in comments">
            -->
        <div v-if="comments.length > 0">
            <div v-for="comment in comments">

            <div class="bg-white shadow-md wfull p-4 my-4">
                <h3 class="font-bold text-grey-900">{{ comment.author }}</h3>
                <br>
                <p class="tex-gray-600 text-sm">
                         {{ comment.content }}
                </p>
                <span v-on:click="responseComment(comment.id)">Répondre à ce commentaire</span>
            </div>

<!--            <div v-for="subComment in comment.comments">
                <div>class="ml-8 bg-white shadow-md wfull p-4 my-4
                    <h3 class="font-bold text-grey-900">{{ subComment.author }}</h3>
                    <br>
                    <p class="text-gray-600 text-sm">
                        {{ subComment.content }}
                    </p>
                </div>
            </div>
        </div>-->
        </div>
<!--        <div v-if="chargement">
            Chargement...
        </div>-->
        <hr>
        <div v-if="user" class="bg-white shadow-lg w-full p-4 my-4">
            <h3 class="font-bold text-gray-900">{{ user.name }}</h3>
            <br>
            <small v-if="comment_id" v-on:click="cancelResponse">Annuler Répondre</small>
            <br>
            <input type="text" placeholder="Votre commentaire" class="bg-gray-200 w-full" v-model="message" >
            <button class="bg-blue-100 w-full no-border" v-on:click="sendComment">Envoyer mon commentaire</button>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                chargement: true,
                message: null,
                comment_id: null,
                user: [],
                comments:[],
                comment:[],
            }
        },
        props: ['post_id'],
        mounted() {
            /* ajouté apres install laravel/passport*/
            axios.get('http://127.0.0.1:8000/api/user')
                 .then(response => {  this.user = response.data; })
            this.getPost();
        },
        methods: {
            cancelResponse() {
                this.comment_id=null;
            },
            responseComment(commentId) {
                this.comment_id = commentId;
            },
            sendComment() {
                if (this.message !== ''){
                    this.chargement = true ;
                    let obj = this ;
                    console.log('Mon commentaire') ;
                    console.log(this.message) ;
                    axios.post('http://127.0.0.1:8000/api/comments/create',{
                        message: this.message,
                        post_id: this.post_id,
                        comment_id: this.comment_id,
                        })
                        .then(function (response){
                            obj.getPost();
                    });
                }
            },
            getPost() {
                let oj = this;
                axios.get('http://127.0.0.1:8000/api/articles/' + this.post_id)
                     .then(function(response) {
                             obj.comments = response.data
                             obj.chargement = false ;
                   /*.catch((err)=> console.log(err)); */
                     });
                }
            }
        }
</script>
