<?php
// This file is part of WEK.
// Copyright 2020 Shintaro Fujiwara
// To salute original program, I leave following lines untact.

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Tests of the upgrade to the new Moodle question engine for attempts at
 * random questions.
 *
 * @package    qtype
 * @subpackage random
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/question/engine/upgrade/tests/helper.php');


/**
 * Testing the upgrade of random question attempts.
 *
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_random_attempt_upgrader_test extends question_attempt_upgrader_test_base {

    public function test_random_deferredfeedback_history620() {
        $quiz = (object) array(
            'id' => '2177',
            'course' => '5174',
            'name' => 'iCMA 41',
            'intro' => '<p>Welcome. This is the first K101 Interactive Computer Marked Assignment (iCMA).</p>
        <p>After the open date, begin by clicking <b>Start attempt</b> and a pop-up box will appear. Click OK and this will take you to the questions.</p>
        <p> </p>',
            'introformat' => FORMAT_HTML,
            'questiondecimalpoints' => '-1',
            'showuserpicture' => '1',
            'showblocks' => '1',
            'timeopen' => '1236556800',
            'timeclose' => '1238713140',
            'preferredbehaviour' => 'deferredfeedback',
            'attempts' => '1',
            'attemptonlast' => '0',
            'grademethod' => '1',
            'decimalpoints' => '0',
            'review' => '67268673',
            'questionsperpage' => '1',
            'shufflequestions' => '0',
            'shuffleanswers' => '0',
            'sumgrades' => '5',
            'grade' => '100',
            'timecreated' => '0',
            'timemodified' => '1236269160',
            'password' => '',
            'subnet' => '',
            'popup' => '0',
            'delay1' => '0',
            'delay2' => '0',
            'timelimit' => '0',
        );
        $attempt = (object) array(
            'id' => '125687',
            'uniqueid' => '125688',
            'quiz' => '2177',
            'userid' => '509191',
            'attempt' => '1',
            'sumgrades' => '5',
            'timestart' => '1236590532',
            'timefinish' => '1238184306',
            'timemodified' => '1238182560',
            'layout' => '28698,0,34245,0,34248,0,35005,0,35009,0,35013,0',
            'preview' => '0',
        );
        $question = (object) array(
            'id' => '34248',
            'category' => '3762',
            'parent' => '34248',
            'name' => 'Random Question (Q2)',
            'questiontext' => '1',
            'questiontextformat' => '0',
            'defaultmark' => '1',
            'penalty' => '0',
            'qtype' => 'random',
            'length' => '1',
            'stamp' => 'learn.open.ac.uk+090218115858+6H1FBE',
            'version' => 'learn.open.ac.uk+090218115858+REDwJ6',
            'hidden' => '0',
            'generalfeedback' => '',
            'generalfeedbackformat' => '1',
            'timecreated' => '1234958338',
            'timemodified' => '1234958338',
            'createdby' => '219095',
            'modifiedby' => '219095',
            'unlimited' => '0',
            'maxmark' => '1',
        );
        $qsession = (object) array(
            'id' => '1512603',
            'attemptid' => '125688',
            'questionid' => '34248',
            'newest' => '4010008',
            'newgraded' => '4010008',
            'sumpenalty' => '0.1',
            'manualcomment' => '',
            'manualcommentformat' => '1',
            'flagged' => '1',
        );
        $qstates = array(
            3820084 => (object) array(
                'attempt' => '125688',
                'question' => '34248',
                'originalquestion' => '0',
                'seq_number' => '0',
                'answer' => 'random34999-103135,103136,103137:',
                'timestamp' => '1236590532',
                'event' => '0',
                'grade' => '0',
                'raw_grade' => '0',
                'penalty' => '0',
                'id' => 3820084,
            ),
            4009916 => (object) array(
                'attempt' => '125688',
                'question' => '34248',
                'originalquestion' => '0',
                'seq_number' => '1',
                'answer' => 'random34999-103135,103136,103137:103137',
                'timestamp' => '1238182723',
                'event' => '2',
                'grade' => '0',
                'raw_grade' => '1',
                'penalty' => '0.1',
                'id' => 4009916,
            ),
            4010008 => (object) array(
                'attempt' => '125688',
                'question' => '34248',
                'originalquestion' => '0',
                'seq_number' => '2',
                'answer' => 'random34999-103135,103136,103137:103137',
                'timestamp' => '1238182723',
                'event' => '6',
                'grade' => '1',
                'raw_grade' => '1',
                'penalty' => '0.1',
                'id' => 4010008,
            ),
        );
        $realquestion = (object) array(
            'id' => '34999',
            'category' => '3762',
            'parent' => '0',
            'name' => 'K101 iCMA41 Qs 2-v2',
            'questiontext' => '<p>(Notice in the panel at the left that the question you have just done is now greyed out. Remember that you can <b>revisit any questions</b> by clicking on the <b>numbered boxes</b>. Click Q1 now to try this out and then click Q2 to return here.)</p>
<p><img style="margin-left: 0px; margin-right: 0px;" src="http://learn.open.ac.uk/file.php/5174/K101images/icma41/K101CMA41-Q1-v0.gif" alt="Table 1 showing Number of households receiving home care (England)" title="Table 1 showing Number of households receiving home care (England)" width="512" height="284" /></p>
<p><b>(<a target="_blank" href="http://learn.open.ac.uk/file.php/5174/iCMA-PDFs-resizableimages/k101-iCMA41-Q2-v2-ResizableFigure.pdf" title="PDF document containing iCMA image - to enable enlargement">Link to resizable Table 1</a>) </b></p>
<p>Which was the first year when more than a quarter of a million households received care from independent agencies?</p>',
            'questiontextformat' => '1',
            'defaultmark' => '1',
            'penalty' => '0.1',
            'qtype' => 'multichoice',
            'length' => '1',
            'stamp' => 'learn.open.ac.uk+090227173002+mbdE0X',
            'version' => 'learn.open.ac.uk+090304190917+xAB5Nf',
            'hidden' => '0',
            'generalfeedback' => '',
            'generalfeedbackformat' => '1',
            'timecreated' => '1235755802',
            'timemodified' => '1236193757',
            'createdby' => '25299',
            'modifiedby' => '25299',
            'unlimited' => '0',
            'options' => (object) array(
                'id' => '15211',
                'question' => '34999',
                'layout' => '0',
                'answers' => array(
                    103135 => (object) array(
                        'question' => '34999',
                        'answer' => '2001',
                        'fraction' => '0',
                        'feedback' => '',
                        'id' => 103135,
                    ),
                    103136 => (object) array(
                        'question' => '34999',
                        'answer' => '2003',
                        'fraction' => '0',
                        'feedback' => '',
                        'id' => 103136,
                    ),
                    103137 => (object) array(
                        'question' => '34999',
                        'answer' => '2005',
                        'fraction' => '1',
                        'feedback' => '',
                        'id' => 103137,
                    ),
                ),
                'single' => '1',
                'shuffleanswers' => '1',
                'correctfeedback' => 'Your answer is correct. Well done.',
                'partiallycorrectfeedback' => '',
                'incorrectfeedback' => 'Your answer is incorrect. The correct answer is: 2005.',
                'answernumbering' => 'abc',
            ),
        );
        $this->loader->put_question_in_cache($realquestion);

        $qa = $this->updater->convert_question_attempt($quiz, $attempt, $question, $qsession, $qstates);

        $expectedqa = (object) array(
            'behaviour' => 'deferredfeedback',
            'questionid' => 34999,
            'variant' => 1,
            'maxmark' => 1,
            'minfraction' => 0,
            'maxfraction' => 1,
            'flagged' => 0,
            'questionsummary' => "(Notice in the panel at the left that the question you have just done is now greyed out. Remember that you can REVISIT ANY QUESTIONS by clicking on the NUMBERED BOXES. Click Q1 now to try this out and then click Q2 to return here.) \n\n[Table 1 showing Number of households receiving home care (England)] \n\n(LINK TO RESIZABLE TABLE 1)  \n\nWhich was the first year when more than a quarter of a million households received care from independent agencies?",
            'rightanswer' => '2005',
            'responsesummary' => '2005',
            'timemodified' => 1238182723,
            'steps' => array(
                0 => (object) array(
                    'sequencenumber' => 0,
                    'state' => 'todo',
                    'fraction' => null,
                    'timecreated' => 1236590532,
                    'userid' => 509191,
                    'data' => array('_order' => '103135,103136,103137'),
                ),
                1 => (object) array(
                    'sequencenumber' => 1,
                    'state' => 'complete',
                    'fraction' => null,
                    'timecreated' => 1238182723,
                    'userid' => 509191,
                    'data' => array('answer' => 2),
                ),
                2 => (object) array(
                    'sequencenumber' => 2,
                    'state' => 'gradedright',
                    'fraction' => 1,
                    'timecreated' => 1238182723,
                    'userid' => 509191,
                    'data' => array('answer' => 2, '-finish' => 1),
                ),
            ),
        );

        $this->compare_qas($expectedqa, $qa);
    }

    public function test_random_deferredfeedback_qsession4225582() {
        $quiz = (object) array(
            'id' => '4410',
            'course' => '5444',
            'name' => 'Block 3, Session 5 Quiz',
            'intro' => 'Pour chacune des questions suivantes vous avez trois réponses possibles.  Cochez la bonne. (Cliquez sur « Check » pour vérifier votre réponse.)',
            'introformat' => FORMAT_HTML,
            'questiondecimalpoints' => '-1',
            'showuserpicture' => '1',
            'showblocks' => '1',
            'timeopen' => '0',
            'timeclose' => '0',
            'optionflags' => '0',
            'attempts' => '0',
            'attemptonlast' => '0',
            'grademethod' => '1',
            'decimalpoints' => '2',
            'review' => '71727591',
            'questionsperpage' => '3',
            'shufflequestions' => '1',
            'shuffleanswers' => '1',
            'sumgrades' => '15',
            'grade' => '10',
            'timecreated' => '0',
            'timemodified' => '1269429396',
            'password' => '',
            'subnet' => '',
            'popup' => '0',
            'delay1' => '0',
            'delay2' => '0',
            'timelimit' => '0',
            'preferredbehaviour' => 'deferredfeedback',
        );
        $attempt = (object) array(
            'id' => '418702',
            'uniqueid' => '418703',
            'quiz' => '4410',
            'userid' => '62892',
            'attempt' => '2',
            'sumgrades' => '9',
            'timestart' => '1274178725',
            'timefinish' => '1274179255',
            'timemodified' => '1274178763',
            'layout' => '101989,101985,101994,0,101988,101986,101992,0,101997,101990,101991,0,101984,101995,101987,0,101983,101993,101996,0',
            'preview' => '0',
        );
        $question = (object) array(
            'id' => '101984',
            'category' => '9148',
            'parent' => '101984',
            'name' => 'Random Question (Block 3, Session 5 Quiz)',
            'questiontext' => '1',
            'questiontextformat' => '0',
            'image' => '',
            'defaultmark' => '1',
            'penalty' => '0',
            'qtype' => 'random',
            'length' => '1',
            'stamp' => 'learn.open.ac.uk+100416133531+H1yive',
            'version' => 'learn.open.ac.uk+100416133531+KrpbHq',
            'hidden' => '0',
            'generalfeedback' => '',
            'generalfeedbackformat' => '1',
            'timecreated' => '1271424931',
            'timemodified' => '1271424931',
            'createdby' => '220574',
            'modifiedby' => '220574',
            'unlimited' => '0',
            'maxmark' => '1',
        );
        $qsession = (object) array(
            'id' => '4225582',
            'attemptid' => '418703',
            'questionid' => '101984',
            'newest' => '10786541',
            'newgraded' => '10786541',
            'sumpenalty' => '0.33',
            'manualcomment' => '',
            'manualcommentformat' => '1',
            'flagged' => '1',
        );
        $qstates = array(
            10786382 => (object) array(
                'attempt' => '418703',
                'question' => '101984',
                'originalquestion' => '0',
                'seq_number' => '0',
                'answer' => 'random98355-341067,341066,341068:',
                'timestamp' => '1274178725',
                'event' => '0',
                'grade' => '0',
                'raw_grade' => '0',
                'penalty' => '0',
                'id' => 10786382,
            ),
            10786398 => (object) array(
                'attempt' => '418703',
                'question' => '101984',
                'originalquestion' => '0',
                'seq_number' => '1',
                'answer' => 'random98355-341067,341066,341068:341061',
                'timestamp' => '1274178725',
                'event' => '2',
                'grade' => '0',
                'raw_grade' => '0',
                'penalty' => '0.33',
                'id' => 10786398,
            ),
            10786515 => (object) array(
                'attempt' => '418703',
                'question' => '101984',
                'originalquestion' => '0',
                'seq_number' => '2',
                'answer' => 'random98355-341067,341066,341068:341067',
                'timestamp' => '1274179164',
                'event' => '2',
                'grade' => '0',
                'raw_grade' => '1',
                'penalty' => '0.33',
                'id' => 10786515,
            ),
            10786541 => (object) array(
                'attempt' => '418703',
                'question' => '101984',
                'originalquestion' => '0',
                'seq_number' => '3',
                'answer' => 'random98355-341067,341066,341068:341067',
                'timestamp' => '1274179164',
                'event' => '6',
                'grade' => '1',
                'raw_grade' => '1',
                'penalty' => '0.33',
                'id' => 10786541,
            ),
        );
        $realquestion = (object) array(
            'id' => '98355',
            'category' => '9148',
            'parent' => '0',
            'name' => '20',
            'questiontext' => 'En France, le covoiturage est une pratique qui a été au départ préconisé par « les écolos et les verts », mais depuis, elle :',
            'questiontextformat' => '1',
            'defaultmark' => '1',
            'penalty' => '0.33',
            'qtype' => 'multichoice',
            'length' => '1',
            'stamp' => 'learn.open.ac.uk+100324131532+CExeWh',
            'version' => 'learn.open.ac.uk+100326162411+qEo2Bg',
            'hidden' => '0',
            'generalfeedback' => '',
            'generalfeedbackformat' => '1',
            'timecreated' => '1269436532',
            'timemodified' => '1269620651',
            'createdby' => '220574',
            'modifiedby' => '220574',
            'unlimited' => '0',
            'options' => (object) array(
                'id' => '37042',
                'question' => '98355',
                'layout' => '0',
                'answers' => array(
                    341066 => (object) array(
                        'question' => '98355',
                        'answer' => 'a été soutenue par les partis de droite.',
                        'fraction' => '0',
                        'feedback' => '',
                        'id' => 341066,
                    ),
                    341067 => (object) array(
                        'question' => '98355',
                        'answer' => 'n’est plus uniquement un positionnement écologiste.',
                        'fraction' => '1',
                        'feedback' => '',
                        'id' => 341067,
                    ),
                    341068 => (object) array(
                        'question' => '98355',
                        'answer' => 'est une idée de gauche, du centre, de droite, d’extrême gauche ou d’extrême droite.',
                        'fraction' => '0',
                        'feedback' => '',
                        'id' => 341068,
                    ),
                ),
                'single' => '1',
                'shuffleanswers' => '1',
                'correctfeedback' => 'Vrai.',
                'partiallycorrectfeedback' => '',
                'incorrectfeedback' => 'Faux.',
                'answernumbering' => 'abc',
            ),
            'hints' => false,
            'maxmark' => '1',
        );
        $this->loader->put_question_in_cache($realquestion);

        $qa = $this->updater->convert_question_attempt($quiz, $attempt, $question, $qsession, $qstates);

        $expectedqa = (object) array(
            'behaviour' => 'deferredfeedback',
            'questionid' => 98355,
            'variant' => 1,
            'maxmark' => 1,
            'minfraction' => 0,
            'maxfraction' => 1,
            'flagged' => 0,
            'questionsummary' => 'En France, le covoiturage est une pratique qui a été au départ préconisé par « les écolos et les verts », mais depuis, elle :',
            'rightanswer' => 'n’est plus uniquement un positionnement écologiste.',
            'responsesummary' => 'n’est plus uniquement un positionnement écologiste.',
            'timemodified' => 1274179164,
            'steps' => array(
                0 => (object) array(
                    'sequencenumber' => 0,
                    'state' => 'todo',
                    'fraction' => null,
                    'timecreated' => 1274178725,
                    'userid' => 62892,
                    'data' => array('_order' => '341067,341066,341068'),
                ),
                1 => (object) array(
                    'sequencenumber' => 1,
                    'state' => 'complete',
                    'fraction' => null,
                    'timecreated' => 1274178725,
                    'userid' => 62892,
                    'data' => array('answer' => '-1'),
                ),
                2 => (object) array(
                    'sequencenumber' => 2,
                    'state' => 'complete',
                    'fraction' => null,
                    'timecreated' => 1274179164,
                    'userid' => 62892,
                    'data' => array('answer' => '0'),
                ),
                3 => (object) array(
                    'sequencenumber' => 3,
                    'state' => 'gradedright',
                    'fraction' => 1,
                    'timecreated' => 1274179164,
                    'userid' => 62892,
                    'data' => array('answer' => '0', '-finish' => '1'),
                ),
            ),
        );

        $this->compare_qas($expectedqa, $qa);
    }

    public function test_random_deferredfeedback_qsession3481928() {
        $quiz = (object) array(
            'id' => '2624',
            'course' => '5233',
            'name' => 'iCMA 42',
            'intro' => '',
            'introformat' => FORMAT_HTML,
            'questiondecimalpoints' => '-1',
            'showuserpicture' => '1',
            'showblocks' => '1',
            'timeopen' => '1267056000',
            'timeclose' => '1271890740',
            'optionflags' => '0',
            'attempts' => '1',
            'attemptonlast' => '0',
            'grademethod' => '1',
            'decimalpoints' => '2',
            'review' => '67268673',
            'questionsperpage' => '1',
            'shufflequestions' => '0',
            'shuffleanswers' => '1',
            'sumgrades' => '18',
            'grade' => '18',
            'timecreated' => '0',
            'timemodified' => '1271852647',
            'password' => '',
            'subnet' => '',
            'popup' => '0',
            'delay1' => '0',
            'delay2' => '0',
            'timelimit' => '0',
            'preferredbehaviour' => 'deferredfeedback',
        );
        $attempt = (object) array(
            'id' => '331814',
            'uniqueid' => '331815',
            'quiz' => '2624',
            'userid' => '239341',
            'attempt' => '1',
            'sumgrades' => '9.13333',
            'timestart' => '1267605659',
            'timefinish' => '1270202969',
            'timemodified' => '1269508052',
            'layout' => '68646,0,81245,0,81246,0,81247,0,81248,0,81249,0,81250,0,82795,0,82797,0,82798,0,82799,0,82800,0,82801,0,82802,0,82803,0,82804,0,82805,0,82806,0,82807,0',
            'preview' => '0',
        );
        $question = (object) array(
            'id' => '81247',
            'category' => '6882',
            'parent' => '81247',
            'name' => 'Random Question (42.02.03.GraphConvert)',
            'questiontext' => '1',
            'questiontextformat' => '0',
            'image' => '',
            'defaultmark' => '1',
            'penalty' => '0',
            'qtype' => 'random',
            'length' => '1',
            'stamp' => 'learn.open.ac.uk+091215084951+AYsG5O',
            'version' => 'learn.open.ac.uk+091215084951+VSqp4u',
            'hidden' => '0',
            'generalfeedback' => '',
            'generalfeedbackformat' => '1',
            'timecreated' => '1260866991',
            'timemodified' => '1260866991',
            'createdby' => '27595',
            'modifiedby' => '27595',
            'unlimited' => '0',
            'maxmark' => '1',
        );
        $qsession = (object) array(
            'id' => '3481928',
            'attemptid' => '331815',
            'questionid' => '81247',
            'newest' => '9646306',
            'newgraded' => '9646306',
            'sumpenalty' => '0.333333',
            'manualcomment' => '',
            'manualcommentformat' => '1',
            'flagged' => '1',
        );
        $qstates = array(
            8809801 => (object) array(
                'attempt' => '331815',
                'question' => '81247',
                'originalquestion' => '0',
                'seq_number' => '0',
                'answer' => 'random83248-',
                'timestamp' => '1267605659',
                'event' => '0',
                'grade' => '0',
                'raw_grade' => '0',
                'penalty' => '0',
                'id' => 8809801,
            ),
            9081885 => (object) array(
                'attempt' => '331815',
                'question' => '81247',
                'originalquestion' => '0',
                'seq_number' => '1',
                'answer' => '64',
                'timestamp' => '1268384692',
                'event' => '2',
                'grade' => '0',
                'raw_grade' => '1',
                'penalty' => '0.333333',
                'id' => 9081885,
            ),
            9107452 => (object) array(
                'attempt' => '331815',
                'question' => '81247',
                'originalquestion' => '0',
                'seq_number' => '1',
                'answer' => 'random83248-64',
                'timestamp' => '1268471437',
                'event' => '2',
                'grade' => '0',
                'raw_grade' => '1',
                'penalty' => '0.333333',
                'id' => 9107452,
            ),
            9646306 => (object) array(
                'attempt' => '331815',
                'question' => '81247',
                'originalquestion' => '0',
                'seq_number' => '2',
                'answer' => 'random83248-64',
                'timestamp' => '1268471437',
                'event' => '6',
                'grade' => '1',
                'raw_grade' => '1',
                'penalty' => '0.333333',
                'id' => 9646306,
            ),
        );
        $realquestion = (object) array(
            'id' => '83248',
            'category' => '6882',
            'parent' => '0',
            'name' => '42.02.03.GraphConvert.E',
            'questiontext' => '<p> The figure below shows a graph for converting between miles and kilometres. </p><p><img src="http://learnacct.open.ac.uk/file.php/5233/quizImages/u2/figs/42.02.07.GraphConvert.png" alt=" The graph has a horizontal axis, labelled miles, with a scale marked from 0 to 50 in steps of 5, and a vertical axis, labelled kilometres, with a scale from 0 to 80 in steps of 10. The straight line of the graph starts at the origin and slopes up to the right, and appears to pass through the point corresponding to 25 miles and 40 kilometres, and through the point corresponding to 50 miles and 80 kilometres. "></img> </p><p>By taking a reading from the graph, estimate how many kilometres are equivalent to 40 miles. </p><p>Round your answer to the nearest kilometre and type it in the box below. </p><p>(Your answer should be a single number, without units.) </p>',
            'questiontextformat' => '0',
            'defaultmark' => '3',
            'penalty' => '0.333333',
            'qtype' => 'numerical',
            'length' => '1',
            'stamp' => 'learn.open.ac.uk+100108135957+SZhkKF',
            'version' => 'learn.open.ac.uk+100108135957+ej40PM',
            'hidden' => '0',
            'generalfeedback' => '<p> Conversion graph for miles and kilometres. </p><p><img src="http://learnacct.open.ac.uk/file.php/5233/quizImages/u2/figs/42.02.07.GraphConvert.E.png" alt=" The figure is the same as in the question, with some two additional lines drawn. So, the graph has a horizontal axis, labelled miles, with a scale marked from 0 to 50 in steps of 5, and a vertical axis, labelled kilometres, with a scale from 0 to 80 in steps of 10. The straight line of the graph starts at the origin and slopes up to the right, and appears to pass through the point corresponding to 25 miles and 40 kilometres, and through the point corresponding to 50 miles and 80 kilometres. The first additional line is vertical line drawn upwards from the horizontal axis from the point corresponding to 40 miles to the point where it meets the sloping line of the graph. From that point a horizontal line is drawn to meet the vertical axis at the point corresponding to 64 kilometres approximately."></img> </p><p>So 40 miles is approximately 64 km. </p><p>See Unit 2, Subsection 2.3. </p>',
            'generalfeedbackformat' => '1',
            'timecreated' => '1262959197',
            'timemodified' => '0',
            'createdby' => '123783',
            'modifiedby' => null,
            'unlimited' => '0',
            'options' => (object) array(
                'answers' => array(
                    278332 => (object) array(
                        'question' => '83248',
                        'answer' => '64',
                        'fraction' => '1',
                        'feedback' => 'Your answer is correct.',
                        'tolerance' => '1',
                        'id' => 278332,
                    ),
                    278333 => (object) array(
                        'question' => '83248',
                        'answer' => '64',
                        'fraction' => '0',
                        'feedback' => 'Your answer is incorrect. It is close, but not quite accurate enough.',
                        'tolerance' => '5',
                        'id' => 278333,
                    ),
                    278334 => (object) array(
                        'question' => '83248',
                        'answer' => '25',
                        'fraction' => '0',
                        'feedback' => 'Your answer is incorrect. Remember you are converting from miles to kilometres.',
                        'tolerance' => '5',
                        'id' => 278334,
                    ),
                    278335 => (object) array(
                        'question' => '83248',
                        'answer' => '*',
                        'fraction' => '0',
                        'feedback' => 'Your answer is incorrect.',
                        'tolerance' => '0',
                        'id' => 278335,
                    ),
                ),
                'units' => array(
                    0 => (object) array(
                        'question' => '83248',
                        'multiplier' => 1,
                        'unit' => 'km',
                        'id' => 2030,
                    ),
                    1 => (object) array(
                        'question' => '83248',
                        'multiplier' => 1,
                        'unit' => 'kilometres',
                        'id' => 2031,
                    ),
                ),
            ),
            'hints' => array(
                44315 => (object) array(
                        'questionid' => '83248',
                        'hint' => 'See Unit 2, Subsection 2.3.',
                        'rest' => null,
                        'id' => 44315,
                ),
                44316 => (object) array(
                        'questionid' => '83248',
                        'hint' => '<p> Find the measurement on the horizontal axis, draw a line vertically up to meet the conversion line and read off the corresponding value on the vertical axis. </p><p>See Unit 2, Subsection 2.3. </p>',
                        'rest' => null,
                        'id' => 44316,
                ),
            ),
            'maxmark' => '1',
        );
        $this->loader->put_question_in_cache($realquestion);

        $qa = $this->updater->convert_question_attempt($quiz, $attempt, $question, $qsession, $qstates);

        $expectedqa = (object) array(
            'behaviour' => 'deferredfeedback',
            'questionid' => 83248,
            'variant' => 1,
            'maxmark' => 1,
            'minfraction' => 0,
            'maxfraction' => 1,
            'flagged' => 0,
            'questionsummary' => "The figure below shows a graph for converting between miles and kilometres. \n\n[ The graph has a horizontal axis, labelled miles, with a scale marked from 0 to 50 in steps of 5, and a vertical axis, labelled kilometres, with a scale from 0 to 80 in steps of 10. The straight line of the graph starts at the origin and slopes up to the right, and appears to pass through the point corresponding to 25 miles and 40 kilometres, and through the point corresponding to 50 miles and 80 kilometres. ] \n\nBy taking a reading from the graph, estimate how many kilometres are equivalent to 40 miles. \n\nRound your answer to the nearest kilometre and type it in the box below. \n\n(Your answer should be a single number, without units.)",
            'rightanswer' => '64 km',
            'responsesummary' => '64',
            'timemodified' => 1268471437,
            'steps' => array(
                0 => (object) array(
                    'sequencenumber' => 0,
                    'state' => 'todo',
                    'fraction' => null,
                    'timecreated' => 1267605659,
                    'userid' => 239341,
                    'data' => array('_separators' => '.$,'),
                ),
                1 => (object) array(
                    'sequencenumber' => 1,
                    'state' => 'complete',
                    'fraction' => null,
                    'timecreated' => 1268471437,
                    'userid' => 239341,
                    'data' => array('answer' => '64'),
                ),
                2 => (object) array(
                    'sequencenumber' => 2,
                    'state' => 'gradedright',
                    'fraction' => 1,
                    'timecreated' => 1268471437,
                    'userid' => 239341,
                    'data' => array('answer' => '64', '-finish' => '1'),
                ),
            ),
        );

        $this->compare_qas($expectedqa, $qa);
    }

    public function test_numerical_deferredfeedback_qsession55() {
        $quiz = (object) array(
            'id' => '2',
            'course' => '2',
            'name' => 'Numerical quiz',
            'intro' => '',
            'introformat' => '1',
            'timeopen' => '0',
            'timeclose' => '0',
            'attempts' => '0',
            'attemptonlast' => '0',
            'grademethod' => '1',
            'decimalpoints' => '2',
            'questiondecimalpoints' => '-1',
            'review' => '4459503',
            'questionsperpage' => '1',
            'shufflequestions' => '0',
            'shuffleanswers' => '1',
            'sumgrades' => '5.00000',
            'grade' => '10.00000',
            'timecreated' => '0',
            'timemodified' => '1305273177',
            'timelimit' => '0',
            'password' => '',
            'subnet' => '',
            'popup' => '0',
            'delay1' => '0',
            'delay2' => '0',
            'showuserpicture' => '0',
            'showblocks' => '0',
            'preferredbehaviour' => 'deferredfeedback',
        );
        $attempt = (object) array(
            'id' => '7',
            'uniqueid' => '7',
            'quiz' => '2',
            'userid' => '3',
            'attempt' => '1',
            'sumgrades' => '5.00000',
            'timestart' => '1305273645',
            'timefinish' => '1305273672',
            'timemodified' => '1305273672',
            'layout' => '6,12,13,15,14,0',
            'preview' => '0',
        );
        $question = (object) array(
            'id' => '14',
            'category' => '2',
            'parent' => '0',
            'name' => 'MC units',
            'questiontext' => '<p>What is twice 1.5 m?</p>',
            'questiontextformat' => '1',
            'generalfeedback' => '',
            'generalfeedbackformat' => '1',
            'penalty' => '0.1000000',
            'qtype' => 'numerical',
            'length' => '1',
            'stamp' => 'tjh238.vledev2.open.ac.uk+110513075703+anXKfw',
            'version' => 'tjh238.vledev2.open.ac.uk+110513075807+HiXe4P',
            'hidden' => '0',
            'timecreated' => '1305273423',
            'timemodified' => '1305273487',
            'createdby' => '2',
            'modifiedby' => '2',
            'maxmark' => '1.0000000',
            'options' => (object) array(
                'answers' => array(
                    21 => (object) array(
                        'id' => '21',
                        'question' => '14',
                        'answer' => '3',
                        'answerformat' => '0',
                        'fraction' => '1.0000000',
                        'feedback' => '',
                        'feedbackformat' => '1',
                        'tolerance' => '',
                    ),
                ),
                'units' => array(
                    0 => (object) array(
                        'id' => '5',
                        'question' => '14',
                        'multiplier' => 1,
                        'unit' => 'm',
                    ),
                    1 => (object) array(
                        'id' => '6',
                        'question' => '14',
                        'multiplier' => 100,
                        'unit' => 'cm',
                    ),
                ),
                'unitgradingtype' => '2',
                'unitpenalty' => '0.5000000',
                'showunits' => '1',
                'unitsleft' => '0',
                'instructions' => '<p>Write an answer like 3 m.</p>',
                'instructionsformat' => '1',
            ),
            'defaultmark' => '1.0000000',
        );
        $qsession = (object) array(
            'id' => '55',
            'attemptid' => '7',
            'questionid' => '14',
            'newest' => '155',
            'newgraded' => '155',
            'sumpenalty' => '0.1000000',
            'manualcomment' => '',
            'manualcommentformat' => '1',
            'flagged' => '0',
        );
        $qstates = array(
            145 => (object) array(
                'id' => '145',
                'attempt' => '7',
                'question' => '14',
                'seq_number' => '0',
                'answer' => '|||||',
                'timestamp' => '1305273645',
                'event' => '0',
                'grade' => '0.0000000',
                'raw_grade' => '0.0000000',
                'penalty' => '0.0000000',
            ),
            150 => (object) array(
                'id' => '150',
                'attempt' => '7',
                'question' => '14',
                'seq_number' => '1',
                'answer' => '300|||||cm',
                'timestamp' => '1305273666',
                'event' => '2',
                'grade' => '0.0000000',
                'raw_grade' => '1.0000000',
                'penalty' => '0.1000000',
            ),
            155 => (object) array(
                'id' => '155',
                'attempt' => '7',
                'question' => '14',
                'seq_number' => '2',
                'answer' => '300|||||cm',
                'timestamp' => '1305273666',
                'event' => '6',
                'grade' => '1.0000000',
                'raw_grade' => '1.0000000',
                'penalty' => '0.1000000',
            ),
        );

        $qa = $this->updater->convert_question_attempt($quiz, $attempt, $question, $qsession, $qstates);

        $expectedqa = (object) array(
            'behaviour' => 'deferredfeedback',
            'questionid' => 14,
            'variant' => 1,
            'maxmark' => 1.0000000,
            'minfraction' => 0,
            'maxfraction' => 1,
            'flagged' => 0,
            'questionsummary' => 'What is twice 1.5 m?',
            'rightanswer' => '3 m',
            'responsesummary' => '300 cm',
            'timemodified' => 1305273666,
            'steps' => array(
                0 => (object) array(
                    'sequencenumber' => 0,
                    'state' => 'todo',
                    'fraction' => null,
                    'timecreated' => 1305273645,
                    'userid' => 3,
                    'data' => array('_separators' => '.$,'),
                ),
                1 => (object) array(
                    'sequencenumber' => 1,
                    'state' => 'complete',
                    'fraction' => null,
                    'timecreated' => 1305273666,
                    'userid' => 3,
                    'data' => array('answer' => '300', 'unit' => 'cm'),
                ),
                2 => (object) array(
                    'sequencenumber' => 2,
                    'state' => 'gradedright',
                    'fraction' => 1,
                    'timecreated' => 1305273666,
                    'userid' => 3,
                    'data' => array('answer' => '300', 'unit' => 'cm', '-finish' => 1),
                ),
            ),
        );

        $this->compare_qas($expectedqa, $qa);
    }
}
