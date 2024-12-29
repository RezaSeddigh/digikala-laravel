<div>
    <!-- === Story section === -->
    <livewire:client.home.story.index/>
    <!-- === slider === -->
    <livewire:client.home.slider.index/>
    <!-- === services === -->
    <livewire:client.home.service.index/>
    <!-- === Product slider === -->
    <livewire:client.home.offers.index/>
    <!-- === Super market Suggest === -->
    <livewire:client.home.banner.index/>
    <!-- === Package Suggestion === -->
    <livewire:client.home.packagesuggestion.index/>
    <!-- === Product Categories === -->
    <livewire:client.home.productcategory.index/>
    <!-- === Ads Section === -->
    <livewire:client.home.add.index/>
    <!-- === Most Favorite Brand === -->
    <livewire:client.home.brand.index/>
    <!-- === weblog === -->
    <livewire:client.home.blog.index/>

    @push('script')
        <script>
            $(document).ready(function () {
                // به تمام دکمه‌های با ویژگی data-story event listener اضافه کنید
                $('button[data-story]').on('click', function () {
                    // دریافت URL ویدیو از data-story
                    var storyUrl = $(this).data('story');
                    var storyTitle = $(this).data('story-title');

                    // تنظیم URL به عنوان src تگ video
                    $('#videoSource').attr('src', storyUrl);
                    $('.modal-title').html(storyTitle);

                    // بارگذاری و پخش ویدیو
                    var videoPlayer = $('#videoPlayer').get(0);
                    videoPlayer.load();
                    videoPlayer.play();
                });

                // هنگامی که مدال بسته می‌شود
                $('#storyModal').on('hide.bs.modal', function () {
                    var videoPlayer = $('#videoPlayer').get(0);
                    videoPlayer.pause(); // توقف ویدیو
                    videoPlayer.currentTime = 0; // تنظیم ویدیو به ابتدای آن
                });
            });
        </script>
    @endpush
</div>
