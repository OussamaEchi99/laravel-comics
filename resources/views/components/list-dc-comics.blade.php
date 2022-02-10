<div class="product_list">
    <div class="list">
        
        @include('components.card', [
            'comics_array' => $comics_array
        ])

        <div class="load_more">
            <a href="#"><h5>LOAD MORE</h5></a>
        </div>
    </div>
</div>