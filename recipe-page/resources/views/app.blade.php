<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simple Omelette Recipe</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="bg-[#F3E5D7] min-h-screen md:h-3000px md:pt-[35px] md:pb-[35px]">
            <div class="max-w-[736px] md:max-h-auto md:p-[40px] md:mt-[40px] mx-auto  bg-white rounded-[24px]">
                <div id="top-image" class="w-full md:w-[656px] md:h-[300px] h-[171px] relative overflow-hidden mb-[40px] rounded-[12px]">
                    <img src="{{ asset('img/omelette.jpg') }}" alt="Omelette" class="object-center absolute h-full w-full object-cover" />
                </div>
                <div id="text-content" class="ml-[32px] mr-[32px]">
                    <div id="title" class="">
                        <h1 class="text-[#312E2C] font-serif font-bold text-[36px] mb-[24px]">Simple Omelette Recipe</h1>
                        <p class="text-[#5F564D]">An easy and quick dish, perfect for any meal. This classic omelette combines beaten eggs cooked to perfection, optionally filled with your choice of cheese, vegetables, or meats.</p>
                    </div>
                    <div id="preparation" class="rounded-[12px] bg-[#FFF7FB] p-[24px] my-[32px]">
                        <h2 class="text-[#7A284E] font-semibold text-[20px] mb-[16px]">Preparation Time</h2>
                        <ul class="marker:text-[#854632] marker:text-xs text-[#5F564D] pl-6 list-disc text-[16px] mb-[16px]">
                            <li class="pl-5"><b>Total:</b> Approximately 10 minutes</li>
                            <li class="pl-5"><b>Preparation:</b> 5 minutes</li>
                            <li class="pl-5"><b>Cooking:</b> 5 minutes</li>
                        </ul>
                    </div>
                    <div id="ingredients">
                        <h2 class="text-[#854632] font-semibold text-[28px] font-serif mb-[24px]">Ingredients</h2>
                        <ul class="marker:text-[#854632] marker:text-xs list-disc pl-5 text-[16px] text-[#5F564D]">
                            <li class="pb-[8px]">2-3 large eggs</li>
                            <li class="pb-[8px]">Salt, to taste</li>
                            <li class="pb-[8px]">Pepper, to taste</li>
                            <li class="pb-[8px]">1 tablespoon of butter or oil</li>
                            <li>Option fillings: cheese, diced vegetables, cooked meats, herbs</li>
                        </ul>
                    </div>

                    <hr class="my-[32px] border-t [#E3DDD7]">

                    <div id="instructions">
                        <h2 class="text-[#854632] font-semibold text-[28px] font-serif mb-[24px]">Instructions</h2>
                        <ol class="marker:text-[#854632] marker:font-bold pl-5 text-[16px] text-[#5F564D] list-decimal">
                            <li class="pb-[8px]"><b>Beat the eggs:</b> In a bowl, beat the eggs with a pinch of salt and pepper until they are well mixed. You can add a tablespoon of water or milk for a fluffier texture.</li>
                            <li class="pb-[8px]"><b>Heat the pan:</b> Place a non-stick frying pan over medium heat and add butter or oil.</li>
                            <li class="pb-[8px]"><b>Cook the omelette:</b> Once the butter is melted and bubbling, pour in the eggs. Tilt the pan to ensure the eggs evenly coat the surface.</li>
                            <li class="pb-[8px]"><b>Add fillings (optional):</b> When the eggs begin to set at the edges but are still slightly runny in the middle, sprinkle your chosen fillings over one half of the omelette.</li>
                            <li class="pb-[8px]"><b>Fold and serve:</b> As the omelette continues to cook, carefully lift one edge and fold it over the fillings. Let it cook for another minute, then slide it onto a plate.</li>
                            <li><b>Enjoy:</b> Serve hot, with additional salt and pepper if needed.</li>
                        </ol>
                    </div>

                    <hr class="my-[32px] border-t [#E3DDD7]">

                    <div id="nutrition">
                        <h2 class="text-[#854632] font-semibold text-[28px] font-serif mb-[24px]">Nutrition</h2>
                        <p class="text-[#5F564D] mb-[24px]">The table below shows nutritional values per serving without the additional fillings.</p>
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody>
                                <tr class="border-b [border-color:#E3DDD7]">
                                    <td class="text-[#5F564D] pl-[32px] py-[12px]">Calories</td>
                                    <td class="text-[#854632] pr-[32px] py-[12px] font-bold">277cal</td>
                                </tr>
                                <tr class="border-b [border-color:#E3DDD7]">
                                    <td class="text-[#5F564D] pl-[32px] py-[12px]">Carbs</td>
                                    <td class="text-[#854632] pr-[32px] py-[12px] font-bold">0g</td>
                                </tr>
                                <tr class="border-b [border-color:#E3DDD7]">
                                    <td class="text-[#5F564D] pl-[32px] py-[12px]">Protein</td>
                                    <td class="text-[#854632] pr-[32px] py-[12px] font-bold">20g</td>
                                </tr>
                                <tr class="border-b [border-color:#E3DDD7]">
                                    <td class="text-[#5F564D] pl-[32px] py-[12px]">Fat</td>
                                    <td class="text-[#854632] pr-[32px] py-[12px] font-bold">22g</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
