<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => '-',
            'last_name' => '-',
            'username' => 'Im.proveYou',
            'email' => 'improveu@protonmail.com',
            'password' => 'sml12345',
            'address' => '-',
            'city' => '-',
            'country' => '-',
            'zip_code' => '-',
            'description' =>
                "**Welcome to our creator account on! We are a team of passionate content creators who believe in sharing knowledge and empowering individuals to achieve their goals.**



* Our courses cover a wide range of topics. As creators on this platform, we are dedicated to providing high-quality, engaging content that helps our students succeed. Join us on this journey of discovery and growth, and let's unlock your full potential together.

<br>

* [x] Thanks for being a part of the im.proveyou community. Let's learn and grow together! ",
            'subscription_id' => '3'
        ]);

        User::create([
            'first_name' => '-',
            'last_name' => '-',
            'username' => 'Admin',
            'email' => 'admin@admin',
            'password' => 'admin@admin',
            'address' => '-',
            'city' => '-',
            'country' => '-',
            'zip_code' => '-',
            'description' => "We are the admin team behind the scenes of this platform, working hard to ensure that everything runs smoothly and that our users have the best possible experience. We are dedicated to providing a safe and inclusive environment for everyone who uses our platform, and we work tirelessly to keep it that way.


As the admin account, we are responsible for managing user accounts, reviewing content, and handling any issues that may arise. We are committed to being transparent and responsive, and we welcome feedback and suggestions from our community.
Thank you for choosing our platform, and please don't hesitate to contact us if you have any questions or concerns.

<br>

`break ;)`",
            'subscription_id' => '4'
        ]);

        $course00 = Course::create([
            'title' => 'Body weight home workout',
            'introduction' => '6 Effective Exercises to Get Fit',
            'course_description' => '1. Squats - 3 sets of 12-15 repetitions
2. Push-ups - 3 sets of 10-12 repetitions
3. Lunges - 3 sets of 10-12 repetitions per side
4. Plank - Hold for 30-60 seconds and repeat 3 times.
5. Mountain Climbers - 3 sets of 20 reps
6. Sit-Ups - 3 sets of 15-20 reps


<br>
Start with 3 sets of squats, 12-15 repetitions each, to target your lower body. Follow it up with 3 sets of push-ups, 10-12 repetitions each, to work your chest and arms. Then, move on to lunges, 3 sets of 10-12 repetitions per side, for a complete leg workout. The plank exercise is next, holding for 30-60 seconds and repeating 3 times, to strengthen your core. Mountain climbers, 3 sets of 20 reps, provide a full-body cardio workout. Finally, finish off with 3 sets of sit-ups, 15-20 reps each, to work your abs.

Remember to take a day off between workouts, and customize the workout to suit your needs by adding other exercises or adjusting the repetitions. Get started with this effective home workout today and see the results!',
            'image_thumbnail_path' => '/thumbnails/course00.webp',
            'image_cover_path' => '/covers/course00.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Bodyweight', 'Home workout', 'Fitness', 'Exercises', 'Push-ups'];
        $course00->tag($tags);

        $course01 = Course::create([
            'title' => 'Beginner Gym Workout',
            'introduction' => 'Full Body Strength Training',
            'course_description' => '1. **Warm-up**: Start with 5-10 minutes of light cardio, such as jogging on the treadmill or using the elliptical machine, to get your blood flowing and warm up your muscles.
2. Squats: Squats are a great exercise for targeting the lower body. Start with a set of 10-12 reps using just your body weight, and then gradually increase the weight as you feel comfortable.
3. Deadlifts: Deadlifts target the hamstrings, glutes, and lower back. Start with a light weight and gradually increase the weight as you feel comfortable. Aim for 8-10 reps.
4. Bench press: Bench press is a classic exercise for targeting the chest, shoulders, and triceps. Start with a weight that you can comfortably lift for 10-12 reps, and gradually increase the weight as you feel comfortable.
5. Pull-ups or lat pulldowns: Pull-ups or lat pulldowns are great for targeting the back and biceps. Aim for 8-10 reps.
6. Overhead press: Overhead press targets the shoulders and triceps. Start with a weight that you can comfortably lift for 10-12 reps, and gradually increase the weight as you feel comfortable.
7. Lunges: Lunges are a great exercise for targeting the legs and glutes. Start with a set of 10-12 reps on each leg, and then gradually increase the weight as you feel comfortable.
8. Plank: Plank is a great exercise for targeting the core. Hold a plank for 30-60 seconds, and then rest for 30 seconds. Repeat for 2-3 sets.

Remember to stretch after your workout to help prevent injury and reduce muscle soreness. Aim to do this workout 2-3 times per week, with at least one day of rest in between workouts.',
            'image_thumbnail_path' => '/thumbnails/course01.webp',
            'image_cover_path' => '/covers/course01.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Fitness', 'Gym', 'Strength Training', 'Beginner', 'Full Body Workout'];
        $course01->tag($tags);

        $course02 = Course::create([
            'title' => 'Stretching Routine',
            'introduction' => 'Simple Stretching Routine for Daily Flexibility',
            'course_description' => '1. squat stretch: Place your feet slightly wider than shoulder-width apart, lower yourself into a squat and hold your hands in front of your chest. Hold this position for 30 seconds and then return to the starting position.
2. leg extension: Sit on the floor with your legs extended, bend your left foot and place it against the inside of your right thigh. Bend forward and try to touch your toes. Hold this position for 30 seconds and then repeat on the other side.
3. shoulder stretch: Place your left hand on your right shoulder and press down. With your right hand reach over your head and hold your left elbow. Gently pull your left hand to the right to stretch your shoulder. Hold this position for 30 seconds and then repeat on the other side.
4. back stretch: lie on your back and bend your knees. Place your hands under your head and lift your head and shoulders off the floor to stretch your upper back. Hold this position for 30 seconds and then return to the starting position.
5. butterfly stretch: Sit on the floor, bend your knees and place the soles of your feet together. Keep your feet as close to your body as possible and press your knees down to stretch your inner thighs. Hold this position for 30 seconds.

Repeat each stretch 2-3 times on each side. Breathe deeply in and out and hold each position for at least 30 seconds. Avoid jerky movements and pay attention to your body. If you feel pain, stop the stretch and seek medical attention.',
            'image_thumbnail_path' => '/thumbnails/course02.webp',
            'image_cover_path' => '/covers/course02.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Flexibility', 'Stretching', 'Mobility', 'Beginner', 'Exercise', 'Wellness'];
        $course02->tag($tags);

        $course03 = Course::create([
            'title' => 'Interval Running',
            'introduction' => '30-Minute Workout for Endurance',
            'course_description' => "Running is a fantastic way to improve your cardiovascular health, burn calories, and boost your overall fitness. Whether you're a beginner looking to get started or an experienced runner looking to improve your performance, this running course is designed to help you achieve your goals.
In this course, we'll cover everything you need to know to start running or take your running to the next level. We'll begin with the basics of running form, including proper posture, foot strike, and arm swing. From there, we'll progress to training strategies, including how to build endurance, increase your speed, and prevent injury.
Whether you're training for a race or simply looking to improve your health and fitness, this running course has everything you need to succeed. So lace up your running shoes, grab a water bottle, and let's get started!

1. **Warm-up:** Start with a 5-minute brisk walk or jog to get your heart rate up and warm up your muscles.
2. **Intervals:** For the next 20 minutes, alternate between 1 minute of running at a moderate pace and 1 minute of running at a faster pace. Repeat this cycle 10 times.
3. **Cooldown:** Finish with a 5-minute brisk walk or slow jog to gradually bring your heart rate back down and prevent dizziness.

Remember to wear appropriate running shoes and stay hydrated throughout your workout. Adjust the pace and intensity of the intervals based on your fitness level and comfort level. You can also vary the terrain by running uphill or on a soft surface like grass or sand to challenge your muscles in different ways. With regular practice, this workout can help improve your endurance, speed, and overall cardiovascular health.",
            'image_thumbnail_path' => '/thumbnails/course03.webp',
            'image_cover_path' => '/covers/course03.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Running', 'Cardio', 'Interval Training', 'Endurance', 'Fitness', 'Advanced'];
        $course03->tag($tags);

        $course04 = Course::create([
            'title' => 'Meditation Beginner Course',
            'introduction' => 'Meditation Course for beginners',
            'course_description' =>"1. Find a quiet place where you won't be disturbed. Sit comfortably on a cushion or a chair, with your back straight and your hands resting on your knees.
2. Start with a few deep breaths, inhaling through your nose and exhaling through your mouth. Let go of any tension in your body and relax.
3. Choose a simple meditation technique, such as focusing on your breath or repeating a word or phrase (mantra) to yourself. If you choose to focus on your breath, simply observe the sensation of the air moving in and out of your nostrils.
4. Set a timer for 5-10 minutes. Close your eyes and begin your meditation practice. If your mind wanders, gently bring your attention back to your breath or mantra.
5. Practice regularly, ideally once a day. You can gradually increase the length of your meditation sessions as you become more comfortable with the practice.
6. Be patient with yourself. Meditation is a skill that takes time and practice to develop. Don't worry about 'doing it right' or achieving any particular state of mind. Simply focus on being present in the moment.
7. Consider attending a beginner's meditation class or using a guided meditation app to help you get started.

**Remember** that meditation is a personal practice, and there is no one 'right' way to do it. Experiment with different techniques and find what works best for you. With regular practice, you may begin to notice improvements in your focus, stress levels, and overall sense of well-being.",
            'image_thumbnail_path' => '/thumbnails/course04.webp',
            'image_cover_path' => '/covers/course04.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Meditation', 'Relax', 'Mindfulness', 'Focus', 'Beginners', 'Mentalhealth'];
        $course04->tag($tags);

        $course05= Course::create([
            'title' => 'Supplements',
            'introduction' => 'Simple Supplements list',
            'course_description' =>"
Here are a few commonly recommended supplements:



* Multivitamin: A multivitamin can help fill in any nutritional gaps in your diet.

* Vitamin D: Many people are deficient in vitamin D, which is important for bone health, immune function, and mood regulation. It's difficult to get enough vitamin D from food alone, so a supplement may be necessary.

* Omega-3 fatty acids: Omega-3s are important for brain and heart health, and are found in fatty fish, nuts, and seeds. If you don't eat enough of these foods, a supplement can be helpful.

* Probiotics: Probiotics are beneficial bacteria that live in your gut and are important for digestive health and immune function. You can get probiotics from fermented foods like yogurt, kimchi, and sauerkraut, or take a supplement.

* Magnesium: Magnesium is important for muscle and nerve function, and is found in leafy greens, nuts, and whole grains. If you don't get enough magnesium from your diet, a supplement may be helpful.

Again, **it's important** to talk to a healthcare professional before starting any supplement regimen, as they can advise you on the appropriate dosage and potential interactions with any medications you may be taking. ",
            'image_thumbnail_path' => '/thumbnails/course05.webp',
            'image_cover_path' => '/covers/course05.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Supplements', 'Nutrition', 'Health', 'Vitamins'];
        $course05->tag($tags);

        $course06= Course::create([
            'title' => 'Beginner Skincare Routine',
            'introduction' => 'Simple skincare routine for clean skin',
            'course_description' =>"
* Cleanser: Start by washing your face with a gentle cleanser to remove any dirt, oil, and makeup. Look for a cleanser that is appropriate for your skin type, whether it's oily, dry, or sensitive.

* Toner: After cleansing, use a toner to help balance your skin's pH and remove any remaining dirt or impurities. Apply the toner to a cotton pad and gently swipe it across your face.

* Moisturizer: Apply a moisturizer to your face and neck to help hydrate and protect your skin. Look for a moisturizer that is appropriate for your skin type, whether it's oil-free for oily skin or richer for dry skin.

* Sunscreen: If you're going outside during the day, apply a broad-spectrum sunscreen with at least SPF 30 to protect your skin from harmful UV rays. Reapply sunscreen every two hours if you'll be spending a lot of time outside.

* Eye cream (optional): If you're concerned about fine lines, puffiness, or dark circles around your eyes, consider using an eye cream. Apply a small amount of eye cream to your ring finger and gently tap it around your eye area.

* Exfoliant (optional): Once or twice a week, you can use an exfoliant to help remove dead skin cells and unclog pores. Look for a gentle exfoliant that is appropriate for your skin type, and use it according to the instructions.



Remember to also **drink plenty of water**, eat a balanced diet, and get enough sleep to help keep your skin healthy and glowing. ",
            'image_thumbnail_path' => '/thumbnails/course06.webp',
            'image_cover_path' => '/covers/course06.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Skincare', 'Health', 'Skin',];
        $course06->tag($tags);

        $course07= Course::create([
            'title' => 'How to dress well',
            'introduction' => 'Course on how to dress well',
            'course_description' =>"
Determine your personal style: Start by figuring out your personal style. This will help you choose clothes that make you feel confident and comfortable.



* Invest in basics: Invest in high-quality, timeless basics that you can mix and match with other pieces in your wardrobe. This can include items like a well-fitting pair of jeans, a white t-shirt, a blazer, and a little black dress.



* Choose clothes that fit well: Make sure your clothes fit well and flatter your body shape. Avoid wearing clothes that are too tight or too loose.



* Accessorize: Accessories can elevate any outfit. Experiment with jewelry, scarves, hats, and shoes to add some personality to your look.



* Play with color and pattern: Don't be afraid to add some color and pattern to your wardrobe. Try mixing and matching different colors and patterns to create unique outfits.



* Dress appropriately for the occasion: Make sure you're dressing appropriately for the occasion. If you're not sure what to wear, consider asking the host or doing some research online.



* Take care of your clothes: Take care of your clothes by following the care instructions on the label. This will help your clothes last longer and look better.

<br>

Remember, fashion is **about expressing yourself** and feeling confident in what you wear. Don't be afraid to experiment and have fun with your style! ",
            'image_thumbnail_path' => '/thumbnails/course07.webp',
            'image_cover_path' => '/covers/course07.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Style', 'Dress well', 'Looks',];
        $course07->tag($tags);

        $course08= Course::create([
            'title' => 'Get more confidence',
            'introduction' => 'Confidence Booster: Quick Strategies for Greater Self-Assurance',
            'course_description' =>"This course will provide you with quick and practical strategies for boosting your confidence. You will learn to identify and overcome self-doubt, manage fear and anxiety, and build a positive self-image. You will also learn techniques for setting and achieving goals, developing social skills, and asserting yourself in professional situations.

* Understand what confidence is and how it can benefit your life.

* Identify and overcome self-doubt using positive self-talk and affirmations.

* Manage fear and anxiety using techniques like deep breathing and visualization.

* Develop a positive self-image by recognizing your strengths and weaknesses.

* Set achievable goals to build momentum and create positive habits.

* Develop social skills and build confidence in social situations.

* Assert yourself in professional situations using effective communication techniques.

* Practice self-care and maintain a healthy lifestyle to support confidence.

* Cultivate resilience and learn to bounce back from setbacks.

* Build a support system of positive influences to maintain confidence and motivation.",
            'image_thumbnail_path' => '/thumbnails/course08.webp',
            'image_cover_path' => '/covers/course08.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Confidence', 'Mental Health', 'people',];
        $course08->tag($tags);

        $course09= Course::create([
            'title' => 'Shadow Boxing Basics',
            'introduction' => 'Shadow Boxing 101: Mastering the Fundamentals',
            'course_description' =>"1. Introduction to Shadow Boxing: Understanding the Benefits and Basics

2. Proper Stance and Footwork: Techniques for Stability and Mobility

3. Jab and Cross: Correct Execution and Common Mistakes

4. Hooks and Uppercuts: Adding Power to Your Punches

5. Defense Techniques: Slips, Rolls, and Blocks

6. Footwork Drills: Enhancing Agility and Coordination

7. Combinations: Putting It All Together for Effective Attack and Defense

8. Shadow Boxing with Weights: Building Endurance and Strength

9. Shadow Sparring: Simulating a Fight Scenario for Realistic Practice

10. Incorporating Shadow Boxing into Your Training Routine: Tips for Practice and Improvement",
            'image_thumbnail_path' => '/thumbnails/course09.webp',
            'image_cover_path' => '/covers/course09.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Boxing', 'Selfdefense', 'meanace',];
        $course09->tag($tags);

        $course10= Course::create([
            'title' => 'Drink more water',
            'introduction' => 'More water will change your life',

            'course_description' =>"
            Step 1: Set a Daily Water Intake Goal

Before you start drinking more water, you should have a goal to aim for. The recommended daily water intake varies, but a general guideline is to drink at least 8 cups (64 ounces) of water per day. However, this amount may vary depending on factors such as age, weight, activity level, and climate. Once you have determined your goal, write it down and keep track of your progress.

Step 2: Make Water Easily Accessible

Keep a reusable water bottle with you throughout the day, so that you can sip on water regularly. You may also consider keeping a glass or bottle of water on your desk or in your car to remind you to drink water.

Step 3: Start Your Day with Water

Drink a glass of water first thing in the morning. This will help you hydrate your body and jumpstart your metabolism. You may also consider adding a slice of lemon to your water to add flavor and aid in digestion.

Step 4: Replace Other Drinks with Water

Replace sugary and caffeinated drinks like soda and coffee with water. If you need some flavor, consider adding slices of fruits, like cucumber, lemon or lime, or herbs like mint, basil, or ginger to your water.

Step 5: Drink Water with Every Meal

Make it a habit to drink a glass of water before, during, and after every meal. This will not only help you stay hydrated, but also aid in digestion.

Step 6: Use a Water Tracking App

If you find it difficult to remember to drink water, use a water tracking app on your phone or wearable device. The app will remind you to drink water throughout the day and keep track of your progress towards your daily goal.

Step 7: Experiment with Temperature

Try drinking water at different temperatures to find what works best for you. Some people prefer room temperature water, while others enjoy ice-cold water. You can also try drinking warm water with lemon or tea for added health benefits.

Step 8: Stay Hydrated During Exercise

Drink water before, during, and after exercise to replace lost fluids and stay hydrated. You may also consider drinking sports drinks that contain electrolytes if you exercise for prolonged periods or in hot environments.

Step 9: Make it a Habit

Drinking more water may take some time to become a habit, but with consistency, it will become easier. Keep track of your progress and celebrate small milestones along the way.

Step 10: Listen to Your Body

Pay attention to your body's thirst cues and drink water accordingly. If you feel thirsty, drink water, even if you haven't reached your daily goal yet. Also, be mindful of any medical conditions that may require you to adjust your water intake.",

            'image_thumbnail_path' => '/thumbnails/course10.webp',
            'image_cover_path' => '/covers/course10.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Health', 'Water', 'Habbits',];
        $course10->tag($tags);

        $course11= Course::create([
            'title' => 'Guide on motivation',
            'introduction' => 'step-by-step guide on how to motivate yourself to go to the gym',

            'course_description' =>"
Step 1: Set a Goal
Setting a specific goal is crucial to staying motivated. Decide what you want to achieve by going to the gym. It could be losing weight, gaining muscle, improving cardiovascular health, or simply feeling more energized. Write down your goal and make it specific, measurable, and achievable.

Step 2: Plan Your Workouts
Planning your workouts in advance can help you stay on track and motivated. Schedule your workouts for the week and commit to them like you would any other appointment. You may also consider hiring a personal trainer to help you design a workout plan that suits your needs and goals.

Step 3: Find a Workout Buddy
Working out with a friend can be a great way to stay motivated. Find a workout buddy who shares your goals and schedule your workouts together. You can keep each other accountable and encourage each other to push harder.

Step 4: Create a Motivating Playlist
Music can be a great motivator during workouts. Create a playlist of your favorite upbeat songs that get you pumped up and ready to exercise.

Step 5: Reward Yourself
Rewarding yourself for reaching milestones or completing a tough workout can help keep you motivated. It could be something as simple as treating yourself to a healthy snack or buying a new workout outfit.

Step 6: Mix Up Your Workouts
Doing the same workout routine every day can get boring and demotivating. Mix up your workouts by trying new exercises, equipment, or classes. This can help keep things fresh and interesting.

Step 7: Track Your Progress
Tracking your progress can help you see how far you've come and keep you motivated to continue. Take measurements, photos, or keep a workout journal to track your progress.

Step 8: Stay Accountable
Hold yourself accountable for your workouts by checking in with yourself regularly. You can also share your progress with friends or family members to help keep you motivated and accountable.

Step 9: Practice Self-Care
Taking care of yourself outside of the gym can also help you stay motivated to go. Make sure you're getting enough sleep, eating a healthy diet, and managing stress levels.

Step 10: Remember Your Why
Finally, remember why you started in the first place. Revisit your goal and remind yourself of the benefits you will gain by sticking to your workout routine. This can help you stay motivated even on days when you don't feel like going to the gym.",

            'image_thumbnail_path' => '/thumbnails/course11.webp',
            'image_cover_path' => '/covers/course11.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Gym', 'Motivation', 'Villainarc',];
        $course11->tag($tags);

        $course12= Course::create([
            'title' => 'How to loose weight',
            'introduction' => 'Step-by-step guide on how to lose weight',

            'course_description' =>"
 Step 1: Set a Goal
 Setting a specific weight loss goal is crucial to staying motivated. Decide how much weight you want to lose and set a realistic timeframe for achieving it.

  Step 2: Track Your Caloric Intake
  To lose weight, you need to create a calorie deficit by burning more calories than you consume. Use a food tracking app or journal to track your caloric intake and make sure you are consuming fewer calories than you burn each day.

    Step 3: Incorporate Physical Activity
Regular physical activity is important for weight loss and overall health. Aim for at least 30 minutes of moderate-intensity exercise most days of the week. This can include activities like walking, jogging, cycling, or strength training.

Step 4: Eat a Balanced Diet
Eating a balanced diet with plenty of fruits, vegetables, whole grains, and lean protein can help you lose weight and improve your overall health. Avoid processed foods, sugary drinks, and high-fat foods.

Step 5: Drink Plenty of Water
Drinking plenty of water can help you feel full and reduce your caloric intake. Aim for at least 8 glasses of water per day.

Step 6: Get Enough Sleep
Getting enough sleep is important for weight loss and overall health. Aim for 7-9 hours of sleep per night.

Step 7: Reduce Stress
Stress can lead to overeating and weight gain. Practice stress-reducing techniques such as meditation, yoga, or deep breathing exercises.

Step 8: Monitor Your Progress
Track your weight loss progress by taking measurements or photos, and regularly assessing how you feel. Celebrate small milestones along the way to stay motivated.

Step 9: Stay Accountable
Hold yourself accountable for your weight loss goals by checking in with yourself regularly. You can also share your progress with friends or family members to help keep you motivated and accountable.

Step 10: Be Patient and Consistent
Weight loss is a gradual process, so be patient and consistent with your efforts. Focus on making sustainable lifestyle changes rather than quick fixes or fad diets.",

    'image_thumbnail_path' => '/thumbnails/course12.webp',
    'image_cover_path' => '/covers/course12.webp',
    'views' => fake()->numberBetween(1, 250),
        'creator_id' => 1,
        ]);
        $tags = ['weightlose', 'fitness', 'health',];
        $course12->tag($tags);

        $course13= Course::create([
            'title' => 'How to gain weight',
            'introduction' => 'Step-by-step guide on how to gain weight',

            'course_description' =>"
Step 1: Set a Goal
Setting a specific weight gain goal is crucial to staying motivated. Decide how much weight you want to gain and set a realistic timeframe for achieving it.

Step 2: Calculate Your Caloric Needs
To gain weight, you need to consume more calories than you burn. Calculate your daily caloric needs using an online calculator or consult with a healthcare professional to determine how many calories you need to consume each day to gain weight.

Step 3: Incorporate Resistance Training
Resistance training can help build muscle mass and increase weight. Incorporate weightlifting or bodyweight exercises into your workout routine at least 2-3 times per week.

Step 4: Eat a Balanced Diet
Eating a balanced diet with plenty of whole foods, lean protein, healthy fats, and complex carbohydrates can help you gain weight in a healthy way. Focus on consuming nutrient-dense foods rather than empty calories from sugary or processed foods.

Step 5: Eat More Frequently
Eating more frequently throughout the day can help you consume more calories. Aim for 3 meals and 2-3 snacks per day, and try to eat every 2-3 hours.

Step 6: Drink Caloric Beverages
Drinking caloric beverages such as smoothies, shakes, or juice can help increase your calorie intake. Try making a high-calorie smoothie with fruits, nuts, and protein powder.

Step 7: Get Enough Sleep
Getting enough sleep is important for weight gain and overall health. Aim for 7-9 hours of sleep per night.

Step 8: Reduce Stress
Stress can affect weight gain by reducing appetite and increasing metabolic rate. Practice stress-reducing techniques such as meditation, yoga, or deep breathing exercises.

Step 9: Monitor Your Progress
Track your weight gain progress by taking measurements or photos, and regularly assessing how you feel. Celebrate small milestones along the way to stay motivated.

Step 10: Be Patient and Consistent
Weight gain is a gradual process, so be patient and consistent with your efforts. Focus on making sustainable lifestyle changes rather than relying on quick fixes or unhealthy foods.",

            'image_thumbnail_path' => '/thumbnails/course13.webp',
            'image_cover_path' => '/covers/course13.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['gain weight', 'fitness', 'gym',];
        $course13->tag($tags);

        $course14= Course::create([
            'title' => 'How to increase muscle mass',
            'introduction' => 'Step-by-step guide on how to increase muscle mass',

            'course_description' =>"
Step 1: Set a Goal
Setting a specific muscle-building goal is crucial to staying motivated. Decide what muscle groups you want to focus on and set a realistic timeframe for achieving your goal.

Step 2: Strength Training
Strength training is the most effective way to build muscle. Incorporate weightlifting or bodyweight exercises into your workout routine at least 2-3 times per week. Focus on compound exercises that work multiple muscle groups at once, such as squats, deadlifts, and bench presses.

Step 3: Progressive Overload
Progressive overload is the key to building muscle. Continuously increase the weight or resistance of your exercises to challenge your muscles and stimulate growth.

Step 4: Eat a Balanced Diet
Eating a balanced diet with plenty of whole foods, lean protein, healthy fats, and complex carbohydrates can help you build muscle. Focus on consuming nutrient-dense foods rather than empty calories from sugary or processed foods.

Step 5: Eat More Protein
Protein is essential for muscle growth and repair. Aim to consume at least 1 gram of protein per pound of body weight each day.

Step 6: Get Enough Rest
Rest is crucial for muscle growth. Aim for at least 7-9 hours of sleep per night, and avoid overtraining by taking rest days.

Step 7: Stay Hydrated
Staying hydrated is important for muscle growth and overall health. Aim to drink at least 8 glasses of water per day.

Step 8: Monitor Your Progress
Track your muscle-building progress by taking measurements or photos, and regularly assessing how you feel. Celebrate small milestones along the way to stay motivated.

Step 9: Be Patient and Consistent
Building muscle is a gradual process, so be patient and consistent with your efforts. Focus on making sustainable lifestyle changes rather than relying on quick fixes or unhealthy supplements.

Step 10: Seek Professional Help
If you are new to strength training or have a pre-existing condition, consult with a healthcare professional or certified trainer to help create a safe and effective workout plan.",

            'image_thumbnail_path' => '/thumbnails/course14.webp',
            'image_cover_path' => '/covers/course14.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['gain weight', 'fitness', 'gym',];
        $course14->tag($tags);

        $course15= Course::create([
            'title' => 'How to loose social anxiety',
            'introduction' => 'Step-by-step guide on how to loose social anxiety',

            'course_description' =>"
Step 1: Acknowledge and Accept Your Anxiety
Acknowledge that you have social anxiety and accept it as a part of who you are. Avoiding or denying your anxiety can make it worse.

Step 2: Identify Triggers
Identify situations that trigger your social anxiety. Make a list of these triggers and try to gradually expose yourself to them.

Step 3: Practice Relaxation Techniques
Practice relaxation techniques such as deep breathing, meditation, or progressive muscle relaxation to help calm your mind and body when you feel anxious.

Step 4: Challenge Negative Thoughts
Challenge negative thoughts and beliefs that contribute to your social anxiety. Try to replace them with more positive and realistic thoughts.

Step 5: Seek Support
Talk to someone you trust about your social anxiety or seek professional help from a therapist or counselor. Joining a support group can also provide a sense of community and understanding.

Step 6: Practice Social Skills
Practice social skills such as active listening, assertiveness, and positive body language. Take small steps towards interacting with others, such as saying hello or asking someone how their day is going.

Step 7: Expose Yourself to Social Situations
Gradually expose yourself to social situations that make you anxious. Start with less challenging situations and work your way up.

Step 8: Set Realistic Goals
Set realistic goals for yourself and celebrate small accomplishments along the way. Avoid setting unrealistic expectations that can lead to disappointment and increased anxiety.

Step 9: Take Care of Yourself
Take care of yourself by eating a healthy diet, exercising regularly, getting enough sleep, and managing stress. These healthy habits can help reduce anxiety overall.

Step 10: Be Patient and Persistent
Reducing social anxiety is a gradual process, so be patient and persistent with your efforts. Focus on making sustainable lifestyle changes and seek professional help if needed.",

            'image_thumbnail_path' => '/thumbnails/course15.webp',
            'image_cover_path' => '/covers/course15.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['mentalhealth', 'social', 'people',];
        $course15->tag($tags);

        $course16= Course::create([
            'title' => 'Be a more positive person',
            'introduction' => 'Step by step guide on how tothink more positivey',

            'course_description' =>"
Step 1: Practice Gratitude
Start each day by thinking of three things you are grateful for. This can help shift your focus to the positive aspects of your life.

Step 2: Challenge Negative Thoughts
Challenge negative thoughts and beliefs that contribute to negative thinking. Try to replace them with more positive and realistic thoughts.

Step 3: Surround Yourself with Positivity
Surround yourself with positive people and environments that uplift you. Limit time spent with negative influences.

Step 4: Focus on Solutions
Focus on finding solutions instead of dwelling on problems. Look for opportunities and possibilities, rather than obstacles.

Step 5: Practice Self-Compassion
Practice self-compassion by being kind to yourself and treating yourself with the same care and understanding that you would offer to a friend.

Step 6: Practice Mindfulness
Practice mindfulness by staying present in the moment and focusing on your senses. This can help reduce worry and anxiety.

Step 7: Visualize Success
Visualize yourself succeeding and achieving your goals. This can help build confidence and a positive mindset.

Step 8: Laugh and Have Fun
Make time to laugh and have fun. Surround yourself with humor and positivity, and engage in activities that bring you joy.

Step 9: Engage in Positive Self-Talk
Engage in positive self-talk by using affirmations and positive statements about yourself. This can help build self-esteem and a positive self-image.

Step 10: Be Patient and Persistent
Thinking more positively is a gradual process, so be patient and persistent with your efforts. Focus on making sustainable lifestyle changes and seek professional help if needed.",

            'image_thumbnail_path' => '/thumbnails/course16.webp',
            'image_cover_path' => '/covers/course16.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['mentalhealth', 'happy', 'positive',];
        $course16->tag($tags);

        $course17= Course::create([
            'title' => 'Nature is amazing',
            'introduction' => 'Step-by-step guide on how to be more in tune with nature',

            'course_description' =>"
Step 1: Spend Time in Nature
Make time to spend in nature, whether it's a local park, forest, beach, or mountain trail. Try to disconnect from technology and focus on the sights, sounds, and smells of nature.

Step 2: Learn About Local Plants and Wildlife
Take the time to learn about the local plants and wildlife in your area. Consider joining a local nature group or taking a nature walk with a guide.

Step 3: Reduce Your Impact
Reduce your impact on the environment by being mindful of your consumption and waste. Use reusable bags, water bottles, and containers, and recycle whenever possible.

Step 4: Practice Mindfulness
Practice mindfulness by staying present in the moment and focusing on your senses. This can help you feel more connected to the natural world around you.

Step 5: Engage in Outdoor Activities
Engage in outdoor activities such as hiking, camping, kayaking, or bird watching. These activities can help you deepen your connection with nature.

Step 6: Garden
Consider starting a garden or growing your own herbs, fruits, or vegetables. This can help you connect with the natural cycles of the earth and the changing seasons.

Step 7: Connect with Local Farms and Farmers
Connect with local farms and farmers to learn about sustainable agriculture practices and to support local food systems.

Step 8: Consider Sustainable Transportation
Consider sustainable transportation options such as biking, walking, or carpooling to reduce your carbon footprint and impact on the environment.

Step 9: Educate Others
Share your knowledge and enthusiasm for nature with others. Encourage friends and family to join you in outdoor activities and to take steps to reduce their impact on the environment.

Step 10: Be Patient and Persistent
Developing a deeper connection with nature is a gradual process, so be patient and persistent with your efforts. Focus on making sustainable lifestyle changes and seek guidance from nature experts or environmental organizations.",

            'image_thumbnail_path' => '/thumbnails/course17.webp',
            'image_cover_path' => '/covers/course17.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['mentalhealth', 'happy', 'positive',];
        $course17->tag($tags);

        $course18= Course::create([
            'title' => 'Benefits of walking',
            'introduction' => 'Step-by-step guide on how to include walks in your day',

            'course_description' =>"
Step 1: Start Small
Start with short walks around your neighborhood, even if it's just for a few minutes at a time. Gradually increase the length and frequency of your walks as you feel more comfortable.

Step 2: Schedule Walks Into Your Day
Schedule walks into your daily routine, whether it's in the morning before work, during your lunch break, or after dinner. This can help make walking a regular habit.

Step 3: Find a Walking Buddy
Find a walking buddy or group to join to help keep you motivated and accountable. Walking with others can also make the experience more enjoyable.

Step 4: Set Goals
Set goals for yourself, such as walking a certain number of steps or miles each day or week. Use a fitness tracker or pedometer to track your progress.

Step 5: Make it Enjoyable
Make walking enjoyable by listening to music or podcasts, exploring new routes, or taking nature walks.

Step 6: Dress Comfortably
Wear comfortable and supportive shoes and clothing that allows you to move freely. This can help reduce the risk of injury and make walking more enjoyable.

Step 7: Take Walking Breaks
Take short walking breaks during the day, such as walking around the office or taking the stairs instead of the elevator. This can help break up long periods of sitting and improve circulation.

Step 8: Make it a Family Activity
Make walking a family activity by taking walks with your partner, children, or pets. This can help you spend quality time together while also improving your health.

Step 9: Explore Your Community
Explore your community by walking to local shops, parks, or cafes. This can help you discover new places and support local businesses.

Step 10: Be Consistent
Consistency is key to making walking a part of your daily routine. Make it a priority to walk regularly and don't let excuses or obstacles get in the way.",

            'image_thumbnail_path' => '/thumbnails/course18.webp',
            'image_cover_path' => '/covers/course18.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['mentalhealth', 'happy', 'positive',];
        $course18->tag($tags);

        $course19 = Course::create([
            'title' => 'BodyPump Basics',
            'introduction' => 'Strength and endurance with barbells.',
            'course_description' => '### Course Instructions
Suitable for beginners and advanced learners. Focus on technique and form.

1. Get a barbell and weights suitable for your fitness level.
2. Follow the exercises in the course and pay attention to proper technique and form.
3. Choose the appropriate weight for each exercise to avoid overloading or injury.
4. Repeat each exercise for 10-15 repetitions and do 2-3 sets.
5. Increase the weight as you make progress and feel stronger.
6. Remember to warm up before and stretch after the training. Have fun!

### Exercises
Here are some exercises that are included in BodyPump training:

- Squats
- Chest Press
- Deadlifts
- Lunges
- Clean and Press

It is important to follow the proper technique and form and adjust the weight to avoid overloading or injury. These exercises are just a small selection of what can be included in a BodyPump training session.',
            'image_thumbnail_path' => '/thumbnails/course19.webp',
            'image_cover_path' => '/covers/course19.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['BodyPump', 'Strength Training', 'barbells'];
        $course19->tag($tags);


        $course20 = Course::create([
            'title' => 'Yoga Fundamentals',
            'introduction' => 'Learn basic yoga poses for flexibility.',
            'course_description' => '### Course Instructions
Ideal for beginners and those with experience. Develop flexibility, balance, and strength through yoga.

1. Find a quiet, comfortable space and a yoga mat.
2. Follow the poses in the course, focusing on proper form and breathing.
3. Start with 10-15 minutes a day and gradually increase your practice time.
4. Listen to your body and modify poses as needed.
5. Remember to warm up and cool down before and after each session.
6. Enjoy the relaxation and stress relief that comes with regular yoga practice.

### Poses
Here are some basic yoga poses included in this course:

- Mountain Pose
- Downward Facing Dog
- Warrior I
- Triangle Pose
- Child Pose

It is important to listen to your body, modify poses as needed, and breathe deeply to get the most out of your yoga practice. These poses are just a small selection of what can be included in a yoga practice.
            ',
            'image_thumbnail_path' => '/thumbnails/course20.webp',
            'image_cover_path' => '/covers/course20.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Yoga', 'yoga poses', 'Flexibility'];
        $course20->tag($tags);

        $course21 = Course::create([
            'title' => 'HIIT Cardio Blast',
            'introduction' => 'Burn calories and boost your metabolism.',
            'course_description' => '### Course Instructions
Suitable for all fitness levels. High-intensity interval training (HIIT) combines cardio and strength exercises to give you a full-body workout in a short amount of time.

1. Find a space to move and a timer.
2. Follow the exercises in the course and pay attention to proper form and breathing.
3. Start with 20-30 seconds of intense exercise followed by 10-15 seconds of rest.
4. Repeat each exercise for 3-4 sets and take a 1-minute break between sets.
5. Combine exercises to create your own HIIT routine.
6. Cool down and stretch after the workout.

### Exercises
Here are some HIIT exercises included in this course:

- Burpees
- Jumping Jacks
- Squat Jumps
- Mountain Climbers
- High Knees

It is important to push yourself during the intense intervals, but also listen to your body and take breaks as needed. These exercises are just a small selection of what can be included in a HIIT workout.
            ',
            'image_thumbnail_path' => '/thumbnails/course21.webp',
            'image_cover_path' => '/covers/course21.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['HIIT', 'Cardio', 'Full-Body Workout'];
        $course21->tag($tags);

        $course22 = Course::create([
            'title' => 'Core Strength Basics',
            'introduction' => 'Strengthen your core for better balance.',
            'course_description' => '### Course Instructions
Suitable for beginners and those with experience. Develop core strength and stability through a series of exercises.

1. Find a comfortable space and a mat or towel.
2. Follow the exercises in the course, focusing on proper form and breathing.
3. Start with 10-15 minutes a day and gradually increase your practice time.
4. Listen to your body and modify exercises as needed.
5. Remember to warm up and cool down before and after each session.
6. Enjoy the benefits of a strong and stable core, including better balance and posture.

### Exercises
Here are some exercises included in this course:

- Plank
- Bicycle Crunches
- Russian Twists
- Leg Raises
- Bridge

It is important to focus on proper form and breathing, and modify exercises as needed to avoid injury. These exercises are just a small selection of what can be included in a core strength workout.
            ',
            'image_thumbnail_path' => '/thumbnails/course22.webp',
            'image_cover_path' => '/covers/course22.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Core Strength', 'Stability Training', 'Balance Improvement'];
        $course22->tag($tags);

        $course23 = Course::create([
            'title' => 'Flexibility Foundations',
            'introduction' => 'Improve your flexibility and prevent injury.',
            'course_description' => '### Course Instructions
Suitable for all fitness levels. Learn how to stretch safely and effectively to increase your range of motion and prevent injury.

1. Find a comfortable space and a mat or towel.
2. Follow the exercises in the course, paying attention to proper form and breathing.
3. Hold each stretch for 15-30 seconds and repeat 2-3 times.
4. Do not push yourself beyond your limits, and avoid bouncing or jerking movements.
5. Stretch regularly to see improvements in flexibility and mobility.
6. Remember to warm up before stretching and cool down after.

### Exercises
Here are some stretches included in this course:

- Forward Fold
- Quad Stretch
- Hamstring Stretch
- Shoulder Stretch
- Child Pose

It is important to focus on proper form and breathing during each stretch. These exercises are just a small selection of what can be included in a flexibility training routine.
            ',
            'image_thumbnail_path' => '/thumbnails/course23.webp',
            'image_cover_path' => '/covers/course23.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Flexibility', 'Stretching', 'Injury Prevention'];
        $course23->tag($tags);

        $course24 = Course::create([
            'title' => 'Cardio Kickboxing Basics',
            'introduction' => 'Punch and kick your way to fitness.',
            'course_description' => '### Course Instructions
Suitable for beginners and experienced individuals. This course will introduce you to the basic moves of cardio kickboxing and help you develop your technique.

1. Find a comfortable space and wear appropriate workout clothes and shoes.
2. Follow the exercises in the course, paying attention to proper form and breathing.
3. Start with a warm-up to get your heart rate up and loosen up your muscles.
4. Learn the basic punches and kicks, and gradually build up to combinations.
5. Take breaks as needed, and hydrate during and after your workout.
6. Enjoy the benefits of a fun and challenging cardio workout.

### Exercises
Here are some exercises included in this course:

- Jab
- Cross
- Front Kick
- Roundhouse Kick
- Uppercut

It is important to focus on proper form and breathing during each exercise, and to modify as needed to avoid injury. These exercises are just a small selection of what can be included in a cardio kickboxing routine.
            ',
            'image_thumbnail_path' => '/thumbnails/course24.webp',
            'image_cover_path' => '/covers/course24.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Cardio Workout', 'Kickboxing', 'Martial Arts'];
        $course24->tag($tags);


        $course25 = Course::create([
            'title' => 'Mindful Meditation Practice',
            'introduction' => 'Relax your mind and reduce stress.',
            'course_description' => '### Course Instructions
Suitable for all levels. Learn how to meditate mindfully to cultivate a sense of calm and focus in your daily life.

1. Find a quiet and comfortable place to sit or lie down.
2. Follow the guided meditation exercises in the course, paying attention to your breath and bodily sensations.
3. Start with short sessions of 5-10 minutes and gradually increase the duration as you become more comfortable.
4. Practice regularly to see the benefits of reduced stress, improved focus, and a greater sense of well-being.
5. Do not worry if your mind wanders during the meditation - simply acknowledge your thoughts and return your focus to your breath.
6. Experiment with different types of meditation to find what works best for you.

### Exercises
Here are some meditation exercises included in this course:

- Breathing Meditation
- Body Scan Meditation
- Loving-Kindness Meditation
- Walking Meditation
- Mindful Eating

It is important to find a meditation practice that works for you and to make it a regular habit. These exercises are just a small selection of what can be included in a mindful meditation routine.
            ',
            'image_thumbnail_path' => '/thumbnails/course25.webp',
            'image_cover_path' => '/covers/course25.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Mindfulness', 'Meditation', 'Stress Reduction'];
        $course25->tag($tags);

        $course26 = Course::create([
            'title' => 'Pilates for Beginners',
            'introduction' => 'Improve your strength and flexibility.',
            'course_description' => '### Course Instructions
Ideal for beginners, this course will introduce you to the principles of Pilates and help you build a strong foundation for your practice.

1. Find a comfortable and quiet space to practice in.
2. Wear comfortable clothes that allow you to move freely.
3. Follow the exercises in the course, paying attention to proper form and breathing.
4. Start with basic Pilates exercises, and gradually build up to more challenging moves.
5. Take breaks as needed, and hydrate during and after your workout.
6. Practice regularly to see the benefits of improved posture, core strength, and flexibility.

### Exercises
Here are some exercises included in this course:

- The Hundred
- Roll-Up
- Single Leg Circles
- Spine Stretch Forward
- Swan

It is important to focus on proper form and breathing during each exercise, and to modify as needed to avoid injury. These exercises are just a small selection of what can be included in a Pilates routine.
            ',
            'image_thumbnail_path' => '/thumbnails/course26.webp',
            'image_cover_path' => '/covers/course26.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Pilates', 'Strength Training', 'Flexibility'];
        $course26->tag($tags);

        $course27 = Course::create([
            'title' => 'Healthy Eating Habits',
            'introduction' => 'Improve your health with better nutrition.',
            'course_description' => '### Course Instructions
Suitable for anyone interested in improving their eating habits, this course will help you learn how to make healthier food choices and develop a sustainable diet plan.

1. Learn about the different food groups and how they can contribute to a balanced diet.
2. Track your food intake and identify areas for improvement.
3. Experiment with new recipes and cooking methods to make healthy eating enjoyable.
4. Gradually make small changes to your diet and lifestyle that can lead to long-term success.
5. Be mindful of portion sizes and avoid restrictive diets that can be unsustainable.
6. Seek support from a healthcare provider or nutritionist if needed.

### Topics Covered
Here are some topics covered in this course:

- Macronutrients and micronutrients
- Meal planning and preparation
- Healthy cooking techniques
- Eating out and social situations
- Mindful eating and portion control

It is important to remember that healthy eating is not about deprivation, but about making informed choices that support your overall health and well-being.
            ',
            'image_thumbnail_path' => '/thumbnails/course27.webp',
            'image_cover_path' => '/covers/course27.webp',
            'views' => fake()->numberBetween(1, 250),
            'creator_id' => 1,
        ]);
        $tags = ['Nutrition', 'Healthy Eating', 'Diet Plan'];
        $course27->tag($tags);
    }

}
