<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.

                        <input type="text" title="email" v-model="body.email">
                        <input type="text" v-model="body.text" title="text">
                        <button type="button" @click="send">send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        data() {
            return {
                body: {
                    email: null,
                    text: null
                }
            }
        },
        methods: {
            send() {
                axios.post('/api/send-mail', this.body).then(res => {
                    console.log(res)
                })
            }
        }
    }
</script>
