 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container px-5">
                <a class="navbar-brand" href= <?php echo $this->Url->build(['controller'=>'native','action'=>'index']);?>>SPCA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href= <?php echo $this->Url->build(['controller'=>'native','action'=>'index']);?>>Home</a></li>
						<li class="nav-item"><a class="nav-link" href= <?php echo $this->Url->build(['controller'=>'native','action'=>'gallery']);?>>Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href= <?php echo $this->Url->build(['controller'=>'native','action'=>'grooming']);?>>Grooming</a></li>
                        <li class="nav-item"><a class="nav-link" href= <?php echo $this->Url->build(['controller'=>'native','action'=>'humane']);?>>Humane</a></li>
						<li class="nav-item"><a class="nav-link" href= <?php echo $this->Url->build(['controller'=>'native','action'=>'training']);?>>Training</a></li>
                        <li class="nav-item"><a class="nav-link" href= <?php echo $this->Url->build(['controller'=>'animals','action'=>'index']);?>>Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>