<?php

# database/seeds/QuoteTableSeeder.php

use App\Models\Quote;  
use Illuminate\Database\Seeder;

class QuoteTableSeeder extends Seeder  
{
    public function run()
    {
        Quote::create([
            'text' => 'Success is going from failure to failure without losing your enthusiasm',
            'author' => 'Winston Churchill',
            'background' => '1.jpg'
        ]);

        Quote::create([
            'text' => 'Dream big and dare to fail',
            'author' => 'Norman Vaughan',
            'background' => '2.jpg'
        ]);

        Quote::create([
            'text' => 'It does not matter how slowly you go as long as you do not stop',
            'author' => 'Confucius',
            'background' => '3.jpg'
        ]);
            
        Quote::create([
            'text' => 'Stories of imagination tend to upset those without one',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'A marriage is always made up of two people who are prepared to swear that only the other one snores',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Geography is just physics slowed down, with a couple of trees stuck in it',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg']);

            
        Quote::create([
            'text' => 'An education was a bit like a communicable sexual disease. It made you unsuitable for a lot of jobs and then you had the urge to pass it on',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'The truth may be out there, but the lies are inside your head',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg']);
            
        Quote::create([
            'text' => 'Give a man a fire and he\'s warm for the day. But set fire to him and he\'s warm for the rest of his life',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Real stupidity beats artificial intelligence every time',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg']);

            
        Quote::create([
            'text' => 'In ancient times cats were worshipped as gods. They have not forgotten this',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'The space between the young readers eyeballs and the printed page is a holy place and officialdom should trample all over it at their peril',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => '"Educational" refers to the process, not the object. Although, come to think of it, some of my teachers could easily have been replaced by a cheeseburger',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg']); 
            
        Quote::create([
            'text' => 'Dickens, as you know, never got round to starting his home page',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg']);

            
        Quote::create([
            'text' => 'I once absent-mindedly ordered Three Mile Island dressing in a restaurant and, with great presence of mind, they brought Thousand Island Dressing and a bottle of chili sauce',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'I didn\'t go to university. Didn\'t even finish A-levels. But I have sympathy for those who did',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'It is said that your life flashes before your eyes just before you die. That is true, it\'s called Life',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Only in our dreams are we free. The rest of the time we need wages',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg']);

            
        Quote::create([
            'text' => 'The trouble with having an open mind, of course, is that people will insist on coming along and trying to put things in it.',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Five exclamation marks, the sure sign of an insane mind',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg']);

            
        Quote::create([
            'text' => 'Taxation is just a sophisticated way of demanding money with menaces',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'The pen is mightier than the sword if the sword is very short, and the pen is very sharp',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Most of the great triumphs and tragedies of history are caused not by people being fundamentally good or fundamentally evil, but by people being fundamentally people',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'It is well known that a vital ingredient of success is not knowing that what you\'re attempting can\'t be done',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Human beings make life so interesting. Do you know, that in a universe so full of wonders, they have managed to invent boredom',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Some humans would do anything to see if it was possible to do it. If you put a large switch in some cave somewhere, with a sign on it saying "End-of-the-World Switch. PLEASE DO NOT TOUCH", the paint wouldn\'t even have time to dry',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Wisdom comes from experience. Experience is often a result of lack of wisdom',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Personally, I think the best motto for an educational establishment is: "Or Would You Rather Be a Mule?"',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'The whole of life is just like watching a film. Only it’s as though you always get in ten minutes after the big picture has started, and no-one will tell you the plot, so you have to work it out all yourself from the clues. —from Moving Pictures',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'It’s not worth doing something unless someone, somewhere, would much rather you weren’t doing it',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'People don\'t alter history any more than birds alter the sky, they just make brief patterns in it',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'I’d rather be a rising ape than a falling angel',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => ' If there was anything that depressed him more than his own cynicism, it was that quite often it still wasn’t as cynical as real life',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Fantasy is an exercise bicycle for the mind. It might not take you anywhere, but it tones up the muscles that can.',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'The presence of those seeking the truth is infinitely to be preferred to the presence of those who think they’ve found it',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'It’s still magic even if you know how it’s done',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'There are times in life when people must know when not to let go. Balloons are designed to teach small children this',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'The entire universe has been neatly divided into things to (a) mate with, (b) eat, (c) run away from, and (d) rocks',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Here’s some advice boy. Don’t put your trust in revolutions. They always come around again. That\'s why they\’re called revolutions',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'If you don’t turn your life into a story, you just become a part of someone else’s story',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Evil begins when you begin to treat people as things',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Inside every sane person there’s a madman struggling to get out',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'I\'m not writing \'The A-Team\' - if there\'s a fight going on, people will get hurt. Not letting this happen would be a betrayal',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Most gods throw dice, but Fate plays chess, and you don\'t find out til too late that he\'s been playing with two queens all along',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Pets are always a help in times of stress. And in times of starvation, too, o\'course',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Captain Quirke was not actually a bad man; he didn’t have the imagination; but he dealt more in the generalised low-grade unpleasantness which slightly tarnishes the soul of all who come into contact with it – rather like British Rail',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => ' Goodness is about what you do. Not what you pray to',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'The intelligence of that creature known as a crowd is the square root of the number of people in it',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'They say a little knowledge is a dangerous thing, but it\'s not one half so bad as a lot of ignorance',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'Time is a drug. Too much of it kills you',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'It occurred to me that at one point it was like I had two diseases - one was Alzheimer\'s, and the other was knowing I had Alzheimer\'s',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'I commend my soul to any God that can find it',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

        Quote::create([
            'text' => 'So much universe, and so little time',
            'author' => 'Terry Pratchett',
            'background' => 'Terry Pratchett/1.jpg'
        ]);

    }
}