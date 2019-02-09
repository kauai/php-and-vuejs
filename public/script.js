new Vue({
    el:"#app",
    data(){
       return {
           users:[],
           user:{}
       }
    },
    methods:{
        create(){
           const form = new FormData()
           form.append('name',this.user.name)
           form.append('email',this.user.email)
           
        //    const promise = fetch('/api.php',{
        //        method:'post',
        //        headers: {'Content-Type':'application/x-www-form-urlencoded'}, 
        //        body: `name=${this.user.name}&email=${this.user.email}`
        //     })

            const promise = fetch('/api.php',{
                method:'post',
                body: form
             })
            
            promise.then(async response => {
                const data = await response.json()
                if(!response.ok){
                    console.log(response)
                   // alert('Deu algo errado!!')
                }else{
                    this.list()
                }
            })
        },
        list(){
            const promise = fetch('/api.php')
            .then(async resp => {
                const data = await resp.json()
                this.users = data.data
                console.log('listando',data)
            })
        },
        get(id){
            fetch('/api.php?id='+ id)
            .then(async resp => {
                const data = await resp.json()
                alert('Nome:' + data.data.name + 'Email: '+ data.data.email)
                console.log(JSON.stringify(data.data))
            })
        }
    },
    mounted(){
        this.list()
    },
    template:`
    <div>
    <div class="container">
        <h3>Cadastra novo usuários</h3>
        <form @submit.prevent="create()">
            <input v-model="user.name" type="text" placeholder="Nome">
            <input v-model="user.email" type="email" placeholder="email">
            <input type="submit" value="Incluir">
        </form>
    </div>

    <div class="container">
        <h3>Lista usuários</h3>

        <table class="table-hover table table-striped table-dark">
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>email</th>
                <th>#</th>
            </tr>
            <tr v-for="user in users">
                <td>{{ user.id }}</td>
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
                <td><a class="btn btn-primary" href="" @click.prevent="get(user.id)">+</a></td>
            </tr>
        </table>
    </div>
</div>
    `
})