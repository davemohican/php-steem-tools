# php-steem-tools
Various tools and scripts written in PHP for exploring the STEEM blockchain.

*2016-08-14:*
This code is still under development. Today I started putting things into a modern structure with composer to include a service layer and an SteemAPI class. I'll continue cleaning things up and add some tests as time permits.

## Reports

FollowerStats: Get the top 100 followed users.

ExchangeTransfers: Get the 50 accounts transfering to and from an exchange along with a daily report of exchange transfer activity.

## Bots

CopyCatVoter: A bot for tracking the votes of another account and voting on the same content after they vote.

## Steem Rate: Interest Rate Calculator for Steem Power

A quick little script I put together for looking at the Steem Power Interest rate and how it changes over time.

To run it:

```
php steem_rate.php <username>
```
Where <username> is the Steem username you want to look into. For more debugging output, include a `true` parmeter:

```
php steem_rate.php <username> true
```
Example:

```
➜  php-steem-tools git:(master) ✗ php steem_rate.php dantheman true
Getting exchange rate at 2016-07-12T11:55:50-05:00...
   Rate: 1 SP = 1M VESTS = 211.18176472117
Getting VESTS balance for dantheman via Piston...
  VESTS: 5916182088.009379...
 1468342552: Starting Steem Power balance: 1249389.7737576
Sleeping 1 minute...
.
Getting exchange rate at 2016-07-12T11:56:52-05:00...
   Rate: 1 SP = 1M VESTS = 211.18302197611
Getting VESTS balance for dantheman via Piston...
  VESTS: 5916182088.009379...
 1468342614: Ending Steem Power balance: 1249397.2119068
--------------------------------
Interest Rate Per Hour: 0.0357%
Steem Power Per Hour: 446.28894975409
Interest Rate Per Week: 5.9976%
Steem Power Per Week: 74976.543558687
```

Note: If any other activity is going on within the account during the time you run the test, you won't get accurate results reflecting *just* the changes due to interest rates.

## Steem Power Balance Over Time

A simple tool for creating a text file of your change in Steem Power with one line added to the file every 5 minutes.

```
php balance_over_time.php <username>
```
It will output a file like so:

![](http://content.screencast.com/users/lukestokes/folders/Jing/media/bb59190e-c2be-47fa-9906-ef19e234fe48/00002266.png)

### Requirements:

* PHP with Curl
* [Piston](http://piston.readthedocs.io/en/develop/index.html) (only needed for non-composer code)
