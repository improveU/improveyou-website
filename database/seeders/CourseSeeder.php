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
            'description' =>
                "We are the admin team behind the scenes of this platform, working hard to ensure that everything runs smoothly and that our users have the best possible experience. We are dedicated to providing a safe and inclusive environment for everyone who uses our platform, and we work tirelessly to keep it that way.


As the admin account, we are responsible for managing user accounts, reviewing content, and handling any issues that may arise. We are committed to being transparent and responsive, and we welcome feedback and suggestions from our community.
Thank you for choosing our platform, and please don't hesitate to contact us if you have any questions or concerns.

<br>

`break ;)`",
            'subscription_id' => '3'
        ]);

        $course00 = Course::create([
            'title' => 'Home Workout with body weight',
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
            'views' => 3,
            'category_id' => 1,
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
            'views' => 8,
            'category_id' => 1,
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
            'views' => 2,
            'category_id' => 1,
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
            'views' => 12,
            'category_id' => 1,
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
            'views' => 12,
            'category_id' => 1,
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
            'views' => 12,
            'category_id' => 1,
            'creator_id' => 1,
        ]);
        $tags = ['Supplements', 'Nutrition', 'Health', 'Vitamins'];
        $course05->tag($tags);

        $course06= Course::create([
            'title' => 'Skincare Routine',
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
            'views' => 12,
            'category_id' => 1,
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
            'views' => 12,
            'category_id' => 1,
            'creator_id' => 1,
        ]);
        $tags = ['Style', 'Dress well', 'Looks',];
        $course07->tag($tags);

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
            'views' => 0,
            'category_id' => 1,
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
            'views' => 0,
            'category_id' => 1,
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
            'views' => 0,
            'category_id' => 1,
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
            'views' => 0,
            'category_id' => 1,
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
            'views' => 0,
            'category_id' => 1,
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
            'views' => 0,
            'category_id' => 1,
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
            'views' => 0,
            'category_id' => 1,
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
            'views' => 0,
            'category_id' => 1,
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
            'views' => 0,
            'category_id' => 1,
            'creator_id' => 1,
        ]);
        $tags = ['Nutrition', 'Healthy Eating', 'Diet Plan'];
        $course27->tag($tags);
    }

}
