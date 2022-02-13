<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Include a required theme -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>VueCrud app</title>
</head>
<body>
    <div id="app">
    
    <div class="container">
        <div class="mt-5 mx-auto">
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addContact_modal"> Add contact</a>
            <div class="card ">
           
            <table class="table ">
                <thead>
                    <tr>
                    <th >ID</th>
                    <th >Name</th>
                    <th >Phone</th>
                    <th >Actions</th>
                    </tr>
                </thead>
                <tbody >
                    <tr   v-for='(contact, index) in contacts'>
                    <th key="index" >{{contact.id}}</th>
                    <td >{{contact.name}}</td>
                    <td>{{contact.phone}}</td>
                    <td><button class="btn btn-warning mx-1" @click="newContact.id = contact.id , newContact.name=contact.name, newContact.phone=contact.phone"  data-bs-toggle="modal" data-bs-target="#updateContact_modal">Update contact {{newContact.id}}</button><button class="btn btn-danger mx-1" @click="deleteContact(contact.id)">remove contact</button></td>
                    
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addContact_modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address {{newContact.name}}</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" v-model="newContact.name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address {{newContact.phone}}</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" v-model="newContact.phone">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" @click="addContact()">Save </button>
      </div>
    </div>
  </div>
</div>


    <div class="modal fade" id="updateContact_modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address {{newContact.name}}</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" v-model="newContact.name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address {{newContact.phone}}</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" v-model="newContact.phone">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" @click="updateContact()">Save </button>
      </div>
    </div>
  </div>
</div>
    </div>

    <!-- axios cdn -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- main js file -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>