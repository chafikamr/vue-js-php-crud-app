var app = new Vue({
    el : '#app',
    data : {
        message : 'Hello World ',
        contacts : [],
        newContact : {
            name : '',
            phone : '',
            id : ''
        }
    },
    created (){
        this.getContacts();
    },
    methods : {
        getContacts : function(){
            axios.get('http://localhost/vueCrud/handlers/get_contacts.php')
            .then(response => {
              this.contacts = response.data;
            })
            .catch(err=>{
                console.log(err)
            })
        },
        deleteContact : function (id){
            axios.delete('http://localhost/vueCrud/handlers/delete_contacts.php?id='+id)
            .then(response => {
             let new_arr = [];
             new_arr = response.data;

             
              this.contacts = new_arr;
            })
            .catch(err=>{
                console.log(err)
            })
        },
        addContact : function(){
            axios.post('http://localhost/vueCrud/handlers/add_contacts.php', this.newContact)
            .then(response => {
                
                let new_arr = [];
               new_arr = response.data;
                this.contacts = new_arr;
                
              
                $('#addContact_modal').modal('hide')
               
                this.newContact.name = "";
                this.newContact.phone = "";

            })
            .catch(err=>{
                console.log(err)
            })
        },
        updateContact : function(){
            axios.post('http://localhost/vueCrud/handlers/update_contacts.php', this.newContact)
            .then(response => {
                let new_arr = [];
               new_arr = response.data;
                this.contacts = new_arr;
                
                
                $('#updateContact_modal').modal('hide')
                
                Swal.fire('contact updated')
                this.newContact.name = "";
                this.newContact.phone = "";
                this.newContact.id = "";

            })
            .catch(err=>{
                console.log(err)
            })
        }
    }
})


