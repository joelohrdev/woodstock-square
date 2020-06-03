<div class="home-events px-5 my-10"
     x-transition:enter="transition ease-out duration-1000"
     x-data="alpineInstance()"
     x-init="fetch('http://woodstock-square.test/wp-json/wp/v2/events')
     .then(response => response.json()).then(data => events = data)
">
    <h1 class="text-3xl text-black border-b pb-2 mb-2 font-bold">Alpine Test</h1>
    <!-- begin: event card -->
    <template x-for="event in events" :key="event.id">
        <div class="event border-b pb-2 mb-2">
            <a href="#" class="text-peach text-xl font-bold" x-text="event.title.rendered"></a>
            <p class="text-black text-sm font-semibold">
            <div x-text="event.acf.start_date"></div>
            <span x-text="event.acf.start_time"></span> - <span x-text="event.acf.end_time"></span>
            <img x-bind:src="event.acf.featured_image" alt="">
        </div>
    </template>
    <!-- end: event card -->

</div>

<script>
    function alpineInstance() {
        return {
            events: [],
        }
    }
</script>