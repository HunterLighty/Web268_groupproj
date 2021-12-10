<!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col">
                    <h1 align="center" class="font-weight-light">Society for the Prevention of Cruelty to Animals</h1>
                    <p align="center">Welcome to the employee portal, here you can view information to assist yourself at work aswell as accurately answer client questions.</p>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-primary my-5 py-4 text-center">
                <div class="card-body"><h4 class="text-white m-50">Giving Animals A New Leash On Life!</h4></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Grooming</h2>
                            <p class="card-text">One of the most common topics a client will inquire about, grooming! It will be very important to thoroughly understand the best practices for grooming, aswell as information regarding our grooming services and prices to relay to the customer.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href= <?php echo $this->Url->build(['controller'=>'native','action'=>'grooming']);?>>Grooming And Care</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Humane Treatment</h2>
                            <p class="card-text">Core to our philosophy as animal rescuers, understanding the sometime nuanced areas of humane treatment can be essential to providing the best care possible to rescued animals, aswell as providing peace of mind and advice to clients. It is very important to remain well read on the most humane practices, aswell as understanding the processes for abuse investigations.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href= <?php echo $this->Url->build(['controller'=>'native','action'=>'humane']);?>>Humane Treatment Information</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Our Shelter</h2>
                            <p class="card-text">Our interface will allow you to quickly ascertain the necessary information about employees, aswell as shelter animals. You will find the tools on this site to easily process new animals, provide information about existing animals at the shelter, aswell as remove animals that have been adopted or are otherwise no longer with us. Employees, while more long-term, can have their general information pulled, new employees added, and old employees removed from the system when necessary</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href= <?php echo $this->Url->build(['controller'=>'animals','action'=>'index']);?>>Admin Portal</a></div>
                    </div>
                </div>
            </div>
        </div>