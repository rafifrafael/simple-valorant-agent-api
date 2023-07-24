<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Valorant API</title>
    <style>
        h1,
        h2,
        h3,
        h4,
        h5 {
            display: inline-block;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3 mb-3">
        <!-- Content here -->
        <h2>Simple Valorant Agent API</h2>
        <br>
        Made for educational purposes.
        <br>
        <br>
        <div class="alert alert-success" role="alert">
            there is a double api to retrieve data in the url, will be fixed soon.
        </div>
        <h3>How To Use</h3>
        <div class="alert alert-success" role="alert">
            <h4><span class="badge bg-success">GET</span></h4> <b>&nbsp&nbsp api/agents</b>&nbsp&nbsp retrieve all
            agents.
            <a class="btn btn--success" data-bs-toggle="collapse" href="#getall">
                <i class="fa-solid fa-circle-chevron-down"></i>
            </a>
            <div class="collapse" id="getall">
                <div class="card card-body">
                    {<br>
                    "success": true,<br>
                    "data": [<br>
                    {<br>
                    "id": 1,<br>
                    "name": "Breach",<br>
                    "codename": "Breach",<br>
                    "real_name": "Erik Torsten",<br>
                    "origin": "Sweden",<br>
                    "race": "Human",<br>
                    "gender": "Male",<br>
                    "role": "Initiator",<br>
                    "basic_abilities_1": "Aftershock",<br>
                    "basic_abilities_2": "Flashpoint",<br>
                    "signature_abilities": "Fault Line",<br>
                    "ultimate_ability": "Rolling Thunder",<br>
                    "ult_points": 8<br>
                    },<br>
                    {<br>
                    "id": 2,<br>
                    "name": "Brimstone",<br>
                    "codename": "Sarge",<br>
                    "real_name": "Liam Byrne",<br>
                    "origin": "United States",<br>
                    "race": "Human",<br>
                    "gender": "Male",<br>
                    "role": "Controller",<br>
                    "basic_abilities_1": "Incendiary",<br>
                    "basic_abilities_2": "Stim Beacon",<br>
                    "signature_abilities": "Sky Smoke",<br>
                    "ultimate_ability": "Orbital Strike",<br>
                    "ult_points": 7<br>
                    }<br>
                    ],<br>
                    "message": "Agents retrieved successfully."<br>
                    }
                </div>
            </div>
        </div>
        <div class="alert alert-success" role="alert">
            <h4><span class="badge bg-success">GET</span></h4> <b>&nbsp&nbsp api/agents/name/{name}</b>&nbsp&nbsp
            retrieve
            agents by name.
            <a class="btn btn--success" data-bs-toggle="collapse" href="#getbyname">
                <i class="fa-solid fa-circle-chevron-down"></i>
            </a>
            <div class="collapse" id="getbyname">
                <div class="card card-body">
                    {<br>
                    "success": true,<br>
                    "data": {<br>
                    "id": 1,<br>
                    "name": "Breach",<br>
                    "codename": "Breach",<br>
                    "real_name": "Erik Torsten",<br>
                    "origin": "Sweden",<br>
                    "race": "Human",<br>
                    "gender": "Male",<br>
                    "role": "Initiator",<br>
                    "basic_abilities_1": "Aftershock",<br>
                    "basic_abilities_2": "Flashpoint",<br>
                    "signature_abilities": "Fault Line",<br>
                    "ultimate_ability": "Rolling Thunder",<br>
                    "ult_points": 8<br>
                    },<br>
                    "message": "Agents retrieved successfully."<br>
                    }
                </div>
            </div>
        </div>
        <div class="alert alert-success" role="alert">
            <h4><span class="badge bg-success">GET</span></h4> <b>&nbsp&nbsp api/agents/role/{role}</b>&nbsp&nbsp
            retrieve
            agents by role.
            <a class="btn btn--success" data-bs-toggle="collapse" href="#getbyrole">
                <i class="fa-solid fa-circle-chevron-down"></i>
            </a>
            <div class="collapse" id="getbyrole">
                <div class="card card-body">
                    {<br>
                    "success": true,<br>
                    "data": {<br>
                    "id": 1,<br>
                    "name": "Breach",<br>
                    "codename": "Breach",<br>
                    "real_name": "Erik Torsten",<br>
                    "origin": "Sweden",<br>
                    "race": "Human",<br>
                    "gender": "Male",<br>
                    "role": "Initiator",<br>
                    "basic_abilities_1": "Aftershock",<br>
                    "basic_abilities_2": "Flashpoint",<br>
                    "signature_abilities": "Fault Line",<br>
                    "ultimate_ability": "Rolling Thunder",<br>
                    "ult_points": 8<br>
                    },<br>
                    "message": "Agents retrieved successfully."<br>
                    }
                </div>
            </div>
        </div>

        <br>

        <h3></h3>
        <div class="alert alert-primary" role="alert">
            <h4><span class="badge bg-primary">POST</span></h4> <b>&nbsp&nbsp api/agents/add</b>&nbsp&nbsp add new
            agent.*
            <a class="btn btn--success" data-bs-toggle="collapse" href="#add">
                <i class="fa-solid fa-circle-chevron-down"></i>
            </a>
            <div class="collapse" id="add">
                <div class="card card-body">
                    "success": true,<br>
                    "data": {<br>
                    "id": 4,<br>
                    "name": "Brimstonez",<br>
                    "codename": "Sarge",<br>
                    "real_name": "Liam Byrne",<br>
                    "origin": "United States",<br>
                    "race": "Human",<br>
                    "gender": "Male",<br>
                    "role": "Controller",<br>
                    "basic_abilities_1": "Incendiary",<br>
                    "basic_abilities_2": "Stim Beacon",<br>
                    "signature_abilities": "Sky Smoke",<br>
                    "ultimate_ability": "Orbital Strike",<br>
                    "ult_points": "7"<br>
                    },<br>
                    "message": "Agent created successfully."<br>
                </div>
            </div>
        </div>
        <div class="alert alert-warning" role="alert">
            <h4><span class="badge bg-warning">POST</span></h4> <b>&nbsp&nbsp api/agents/update/{id}</b>&nbsp&nbsp
            update selected agent.*
            <a class="btn btn--success" data-bs-toggle="collapse" href="#update">
                <i class="fa-solid fa-circle-chevron-down"></i>
            </a>
            <div class="collapse" id="update">
                <div class="card card-body">
                    "Agent updated successfully."
                </div>
            </div>
        </div>
        <div class="alert alert-danger" role="alert">
            <h4><span class="badge bg-danger">DELETE</span></h4> <b>&nbsp&nbsp api/agents/delete/{id}</b>&nbsp&nbsp
            delete selected agent.*
            <a class="btn btn--danger" data-bs-toggle="collapse" href="#delete" role="button" aria-expanded="false"
                aria-controls="collapseExample">
                <i class="fa-solid fa-circle-chevron-down"></i>
            </a>
            <div class="collapse" id="delete">
                <div class="card card-body">
                    {<br>
                    "success": true,<br>
                    "data": [],<br>
                    "message": "Agent deleted successfully."<br>
                    }
                </div>
            </div>
        </div>
        *login required.
    </div>
    <footer class="bg-light text-center text-white fixed-bottom">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Google -->
                <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="mailto:rafifmurtadho@gmail.com"
                    role="button"><i class="fab fa-google"></i></a>
                <!-- Linkedin -->
                <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="https://www.linkedin.com/in/rafifmurtadho/"
                    role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="https://github.com/rafifrafael"
                    role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Rafif Murtadho
        </div>
        <!-- Copyright -->
    </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/237c69a9d4.js" crossorigin="anonymous"></script>
    <script defer src="/_vercel/insights/script.js"></script>
</body>

</html>
