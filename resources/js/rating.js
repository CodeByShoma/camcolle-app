//ページが表示されたときに動き始める
document.addEventListener('DOMContentLoaded', function(){

    // 星のSVGたちを全部見つける
    const stars = document.querySelectorAll('#star-rating svg');

    //評価を入れるinputを見つける
    const ratingInput = document.getElementById('rating-value');

    // 今選ばれている星の数
    let selectedRating = 0;

    //星の色をアップデートする関数
    function updateStars(value){
        stars.forEach((star, index) => {
            if(index < value){
                console.log(true);
                star.classList.remove('text-gray-300');
                star.classList.add('text-yellow-400');
            }else{
                console.log(false);
                star.classList.remove('text-yellow-400');
                star.classList.add('text-gray-300');
            }
        });
    }

        //それぞれの星にマウスイベントをつける
        stars.forEach(star => {
            //ホバーした時の動き
            star.addEventListener('mouseover', () => {
                const hoverValue = parseInt(star.getAttribute('data-star'));
                updateStars(hoverValue);
            });

            //ホバーを外したとき、選ばれてる数に戻す
            star.addEventListener('mouseout', () => {
                updateStars(selectedRating);
            });

            //クリックで確定（値をセット）
            star.addEventListener('click', () => {
                selectedRating = parseInt(star.getAttribute('data-star'));
                ratingInput.value = selectedRating;
                updateStars(selectedRating);
            });
        });

        // 最初に表示するときも全部消した状態から始める
        updateStars(selectedRating);
});
