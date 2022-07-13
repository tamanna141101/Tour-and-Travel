
    <section id="dashboard">
   
        <div>
            
        <?php
    @include 'sidenav.php';
    ?>

            <div class="content">



                <div id='addDestination'>
                    <div class="container">
                        <h6 class="title">General Information</h6>
                        <div class="product-content">
                            <form action="">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <label htmlFor="Title">Title:</label>
                                        <input required type="text" placeholder="Title" />
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label htmlFor="Destination">Destinations:</label>
                                        <select>
                                            <option value="germany">Germany</option>
                                            <option value="japan">Japan</option>
                                            <option value="thailand">Thailand</option>
                                            <option value="mexico">Mexico</option>
                                            <option value="indonesia">Indonesia</option>
                                        </select>
                                    </div>
                                </div>
        
                                <div class="row mt-4">
                                    <div class="col-sm-12 col-md-6">
                                        <label htmlFor="OldPrice">Price</label>
                                        <input required type="number" name="price" placeholder="Price" />
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label htmlFor="newPrice">Rating</label>
                                        <input max="5" min="0" required type="number" name="rating" placeholder="Rating" />
                                    </div>
                                </div>
        
                                <div class="row mt-4">
                                    <div class="col-sm-12 col-md-6">
                                        <label htmlFor="description">Description</label>
                                        <textarea name="description" rows="8"></textarea>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
        
                                    <label htmlFor="UploadPhoto">Upload Photo</label>
                                        <div class="image-upload">
                                            <label for="file-input">
                                                <img src="../image/folderImage.png" alt="Image">
                                                <h5>Upload photo</h5>
                                            </label>
        
                                            <input
                                                name='imageUrl'
                                                id="file-input"
                                                type="file"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <input style = "background:darkgray" class='mt-5 text-white bg-darkgray' type="submit" value="Submit" />
                            </form>
        
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>