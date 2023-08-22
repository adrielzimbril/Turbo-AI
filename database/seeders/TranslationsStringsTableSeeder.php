<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TranslationsStringsTableSeeder extends Seeder
{

  /**
   * Auto generated seed file
   *
   * @return void
   */
  public function run()
  {


    \DB::table('translations_strings')->delete();

    \DB::table('translations_strings')->insert(array (
      0 =>
        array (
          'en' => 'We have sent you an email for account confirmation. Please confirm your account to continue. Please also check your spam folder',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      1 =>
        array (
          'en' => 'We have sent you an email for account confirmation. Please confirm your account to continue.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      2 =>
        array (
          'en' => 'auth.password',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      3 =>
        array (
          'en' => 'There was an issue generating your Image, please try again or contact support team',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      4 =>
        array (
          'en' => 'Product ID and Price ID of all membership plans are generated.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      5 =>
        array (
          'en' => 'You already have subscription. Please cancel  your actual subscription before create new.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      6 =>
        array (
          'en' => 'Not Needed',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      7 =>
        array (
          'en' => 'Back to dashboard',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      8 =>
        array (
          'en' => 'Affiliate Requests',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      9 =>
        array (
          'en' => 'Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      10 =>
        array (
          'en' => 'Withdrawal Requests',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      11 =>
        array (
          'en' => 'Amount',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      12 =>
        array (
          'en' => 'Bank Information',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      13 =>
        array (
          'en' => 'Status',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      14 =>
        array (
          'en' => 'Date',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      15 =>
        array (
          'en' => 'Action',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      16 =>
        array (
          'en' => 'Set as Sent',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      17 =>
        array (
          'en' => 'There is no withdraval request',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      18 =>
        array (
          'en' => 'Succesfull Withdrawal Requests',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      19 =>
        array (
          'en' => 'There is no succesfull withdraval request',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      20 =>
        array (
          'en' => 'Payment Gateways',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      21 =>
        array (
          'en' => 'Coming soon',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      22 =>
        array (
          'en' => 'Payment Methods Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      23 =>
        array (
          'en' => 'If you want to active this payment gateway.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      24 =>
        array (
          'en' => 'Enable Gateway',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      25 =>
        array (
          'en' => 'Check the documentation.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      26 =>
        array (
          'en' => 'Stripe Secret Key',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      27 =>
        array (
          'en' => 'Stripe Publishable Key',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      28 =>
        array (
          'en' => 'Save',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      29 =>
        array (
          'en' => 'Paypal Client Key',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      30 =>
        array (
          'en' => 'Paypal Client Secret',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      31 =>
        array (
          'en' => 'Gateway Settings saved successfully. Redirecting...',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      32 =>
        array (
          'en' => 'Iyzyco Publishable Key',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      33 =>
        array (
          'en' => 'Iyzyco Secret Key',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      34 =>
        array (
          'en' => 'Razorpay Key',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      35 =>
        array (
          'en' => 'Razorpay Secret',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      36 =>
        array (
          'en' => 'Flutterwave Secret Key',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      37 =>
        array (
          'en' => 'Flutterwave Secret Hash',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      38 =>
        array (
          'en' => 'Flutterwave Public Key',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      39 =>
        array (
          'en' => 'Paystack Secret Key',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      40 =>
        array (
          'en' => 'Paystack Public Key',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      41 =>
        array (
          'en' => 'Paytm Channel',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      42 =>
        array (
          'en' => 'Paytm Environment',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      43 =>
        array (
          'en' => 'Paytm Industry Type',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      44 =>
        array (
          'en' => 'Paytm Merchant ID',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      45 =>
        array (
          'en' => 'Paytm Merchant Key',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      46 =>
        array (
          'en' => 'Paytm Merchant website',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      47 =>
        array (
          'en' => 'Save your settings.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      48 =>
        array (
          'en' => 'Check all membership plans for this gateway.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      49 =>
        array (
          'en' => 'Remove all products and prices defined before for old settings.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      50 =>
        array (
          'en' => 'Cancel all old subscriptions. Acquired amounts do not reset.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      51 =>
        array (
          'en' => 'Generate new product definitions in your new gateway account.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      52 =>
        array (
          'en' => 'Generate new price definitions in your new gateway account.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      53 =>
        array (
          'en' => 'Subscriptions and Packs',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      54 =>
        array (
          'en' => 'Manage Token Packs and Subscription',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      55 =>
        array (
          'en' => 'Create New Subscription',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      56 =>
        array (
          'en' => 'Create New Token Pack',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      57 =>
        array (
          'en' => 'Type',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      58 =>
        array (
          'en' => 'Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      59 =>
        array (
          'en' => 'Price',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      60 =>
        array (
          'en' => 'Words',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      61 =>
        array (
          'en' => 'Images',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      62 =>
        array (
          'en' => 'Updated At',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      63 =>
        array (
          'en' => 'Actions',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      64 =>
        array (
          'en' => 'Token Pack',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      65 =>
        array (
          'en' => 'Subscription',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      66 =>
        array (
          'en' => 'Unlimited',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      67 =>
        array (
          'en' => 'Active',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      68 =>
        array (
          'en' => 'Disabled',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      69 =>
        array (
          'en' => 'Edit',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      70 =>
        array (
          'en' => 'Delete',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      71 =>
        array (
          'en' => 'Create',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      72 =>
        array (
          'en' => 'You don\\\'t have any payment gateway activated',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      73 =>
        array (
          'en' => 'Please enable at least one gateway!',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      74 =>
        array (
          'en' => 'Plan Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      75 =>
        array (
          'en' => 'Featured Plan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      76 =>
        array (
          'en' => 'Yes',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      77 =>
        array (
          'en' => 'No',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      78 =>
        array (
          'en' => 'Total Words',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      79 =>
        array (
          'en' => 'Total Images',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      80 =>
        array (
          'en' => 'Enter "-1" for unlimited usage.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      81 =>
        array (
          'en' => 'Features (Comma Seperated)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      82 =>
        array (
          'en' => 'Generate new product definitions in your gateway accounts.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      83 =>
        array (
          'en' => 'Generate new price definitions in your gateway accounts.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      84 =>
        array (
          'en' => 'This process will take time. So, please be patient and wait until success message appears.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      85 =>
        array (
          'en' => 'These values are generated for you',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      86 =>
        array (
          'en' => 'Gateway',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      87 =>
        array (
          'en' => 'Product ID',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      88 =>
        array (
          'en' => 'Plan / Price ID',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      89 =>
        array (
          'en' => 'Monthly',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      90 =>
        array (
          'en' => 'Yearly',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      91 =>
        array (
          'en' => 'Max Tokens',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      92 =>
        array (
          'en' => 'Can Create AI Images',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      93 =>
        array (
          'en' => 'Template Access',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      94 =>
        array (
          'en' => 'All',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      95 =>
        array (
          'en' => 'Premium',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      96 =>
        array (
          'en' => 'Regular',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      97 =>
        array (
          'en' => 'AI Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      98 =>
        array (
          'en' => 'Please note GPT-4 is not working with every API KEY.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      99 =>
        array (
          'en' => 'You have to have an api key which can work with GPT-4.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      100 =>
        array (
          'en' => 'Also please note that Chat models works with ChatGPT and GPT-4 models. So if you choose below it will automatically use ChatGPT.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      101 =>
        array (
          'en' => 'Edit Question',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      102 =>
        array (
          'en' => 'Create Question',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      103 =>
        array (
          'en' => 'Question',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      104 =>
        array (
          'en' => 'Answer',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      105 =>
        array (
          'en' => 'F.A.Q',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      106 =>
        array (
          'en' => 'Add new',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      107 =>
        array (
          'en' => 'Created At',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      108 =>
        array (
          'en' => 'This will be deleted, This action can be reverted.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      109 =>
        array (
          'en' => 'Edit Feature',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      110 =>
        array (
          'en' => 'Create Feature',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      111 =>
        array (
          'en' => 'Title',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      112 =>
        array (
          'en' => 'Description',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      113 =>
        array (
          'en' => 'Icon',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      114 =>
        array (
          'en' => 'Features',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      115 =>
        array (
          'en' => 'Edit How It Work',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      116 =>
        array (
          'en' => 'Create How It Work',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      117 =>
        array (
          'en' => 'Order',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      118 =>
        array (
          'en' => 'Content',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      119 =>
        array (
          'en' => 'Image',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      120 =>
        array (
          'en' => 'How it Works',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      121 =>
        array (
          'en' => 'Edit Client',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      122 =>
        array (
          'en' => 'Create Client',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      123 =>
        array (
          'en' => 'Edit Testimonial',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      124 =>
        array (
          'en' => 'Create Testimonial',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      125 =>
        array (
          'en' => 'Clients',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      126 =>
        array (
          'en' => 'Usecases',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      127 =>
        array (
          'en' => 'Frontend Sections',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      128 =>
        array (
          'en' => 'Banner Section',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      129 =>
        array (
          'en' => 'Banner Active',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      130 =>
        array (
          'en' => 'Banner Title',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      131 =>
        array (
          'en' => 'Banner Text',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      132 =>
        array (
          'en' => 'Hero Section',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      133 =>
        array (
          'en' => 'Hero Active',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      134 =>
        array (
          'en' => 'Hero Heading Tag',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      135 =>
        array (
          'en' => 'Hero Title',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      136 =>
        array (
          'en' => 'Hero Subtitle',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      137 =>
        array (
          'en' => 'Hero Description',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      138 =>
        array (
          'en' => 'Hero Button',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      139 =>
        array (
          'en' => 'Hero Button URL',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      140 =>
        array (
          'en' => 'Site Illustration',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      141 =>
        array (
          'en' => 'Chats Slider Section',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      142 =>
        array (
          'en' => 'Chats Slider Active',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      143 =>
        array (
          'en' => 'Features Section',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      144 =>
        array (
          'en' => 'Features Active',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      145 =>
        array (
          'en' => 'Features Heading',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      146 =>
        array (
          'en' => 'Features Text',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      147 =>
        array (
          'en' => 'Features Link',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      148 =>
        array (
          'en' => 'Usecases Section',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      149 =>
        array (
          'en' => 'Usecases Active',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      150 =>
        array (
          'en' => 'Usecases Heading',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      151 =>
        array (
          'en' => 'Prompts Section',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      152 =>
        array (
          'en' => 'Prompts Active',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      153 =>
        array (
          'en' => 'Prompts Heading',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      154 =>
        array (
          'en' => 'Prompts Description',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      155 =>
        array (
          'en' => 'How It Works Section',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      156 =>
        array (
          'en' => 'How It Works Active',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      157 =>
        array (
          'en' => 'How It Works Heading',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      158 =>
        array (
          'en' => 'How It Works Description',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      159 =>
        array (
          'en' => 'Image Section',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      160 =>
        array (
          'en' => 'Image Active',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      161 =>
        array (
          'en' => 'Image Heading',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      162 =>
        array (
          'en' => 'Testimonials Section',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      163 =>
        array (
          'en' => 'Testimonials Active',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      164 =>
        array (
          'en' => 'Testimonials Title',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      165 =>
        array (
          'en' => 'Testimonials Heading',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      166 =>
        array (
          'en' => 'Partners Section',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      167 =>
        array (
          'en' => 'Partners Active',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      168 =>
        array (
          'en' => 'Pricing Section',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      169 =>
        array (
          'en' => ' Active',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      170 =>
        array (
          'en' => 'Pricing Save Percent',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      171 =>
        array (
          'en' => 'Pricing Heading',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      172 =>
        array (
          'en' => 'Pricing Title',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      173 =>
        array (
          'en' => 'Pricing Description',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      174 =>
        array (
          'en' => 'Pricing Monthly Text',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      175 =>
        array (
          'en' => 'Pricing Onetime Text',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      176 =>
        array (
          'en' => 'FAQ Section',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      177 =>
        array (
          'en' => 'FAQ Heading',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      178 =>
        array (
          'en' => 'FAQ Title',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      179 =>
        array (
          'en' => 'FAQ Description',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      180 =>
        array (
          'en' => 'Try It Section',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      181 =>
        array (
          'en' => 'Try It Title',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      182 =>
        array (
          'en' => 'Try It Description',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      183 =>
        array (
          'en' => 'Try It Button Text',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      184 =>
        array (
          'en' => 'Try It Link',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      185 =>
        array (
          'en' => 'Footer Section',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      186 =>
        array (
          'en' => 'Footer Button Text',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      187 =>
        array (
          'en' => 'Footer Button URL (Please enter full url)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      188 =>
        array (
          'en' => 'Frontend Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      189 =>
        array (
          'en' => 'Frontend Landing Page Style',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      190 =>
        array (
          'en' => 'Frontend Landing Style',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      191 =>
        array (
          'en' => 'Frontend Setup',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      192 =>
        array (
          'en' => 'Custom Landing Page',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      193 =>
        array (
          'en' => 'You have a personalized frontend page ? Provide the link of your frontend page. Please provide full URL with http:// or https://',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      194 =>
        array (
          'en' => 'Custom CSS Style',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      195 =>
        array (
          'en' => 'You have a custom CSS Style ? Paste your style here',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      196 =>
        array (
          'en' => 'Custom JS Script',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      197 =>
        array (
          'en' => 'You have a custom JS Script ? Paste your script here',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      198 =>
        array (
          'en' => 'Footer Social Media',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      199 =>
        array (
          'en' => 'Social Link',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      200 =>
        array (
          'en' => 'Create New Testimonial',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      201 =>
        array (
          'en' => 'Avatar',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      202 =>
        array (
          'en' => 'Job Title',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      203 =>
        array (
          'en' => 'Testimonial',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      204 =>
        array (
          'en' => 'Testimonials',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      205 =>
        array (
          'en' => 'Work',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      206 =>
        array (
          'en' => 'This user will be deleted, This action can be reverted.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      207 =>
        array (
          'en' => 'Edit Usecase',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      208 =>
        array (
          'en' => 'Create Usecase',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      209 =>
        array (
          'en' => 'Tab Title',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      210 =>
        array (
          'en' => 'Content Subtitle',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      211 =>
        array (
          'en' => 'Total sales',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      212 =>
        array (
          'en' => 'Words Generated',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      213 =>
        array (
          'en' => 'Images Generated',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      214 =>
        array (
          'en' => 'New users',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      215 =>
        array (
          'en' => 'Revenue',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      216 =>
        array (
          'en' => 'Generated Content',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      217 =>
        array (
          'en' => 'Activity',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      218 =>
        array (
          'en' => 'by',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      219 =>
        array (
          'en' => 'Latest Transactions',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      220 =>
        array (
          'en' => 'Method',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      221 =>
        array (
          'en' => 'Info',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      222 =>
        array (
          'en' => 'Plan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      223 =>
        array (
          'en' => 'Add or Edit Custom Template',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      224 =>
        array (
          'en' => 'Category Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      225 =>
        array (
          'en' => 'AI Categories',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      226 =>
        array (
          'en' => 'Add Category',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      227 =>
        array (
          'en' => 'AI Info',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      228 =>
        array (
          'en' => 'Personage Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      229 =>
        array (
          'en' => 'Pick a name to your personage.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      230 =>
        array (
          'en' => 'Personage Short Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      231 =>
        array (
          'en' => 'Shortened name of the personage or human name. Maximum 3 letters is suggested.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      232 =>
        array (
          'en' => 'A short description of what this chat template can do.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      233 =>
        array (
          'en' => 'Personality',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      234 =>
        array (
          'en' => 'Give a name to chatbot to give it more personality.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      235 =>
        array (
          'en' => 'Role',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      236 =>
        array (
          'en' => 'A role of your chatbot that can define what it can help with',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      237 =>
        array (
          'en' => 'Helps With',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      238 =>
        array (
          'en' => 'Describe what your chatbot can do. It\\\'s your chatbot introduce that will be shows when a conversation are started.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      239 =>
        array (
          'en' => 'Chatbot Training',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      240 =>
        array (
          'en' => 'Chat models take a list of messages as input and return a model-generated message as output. Add your custom JSON data.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      241 =>
        array (
          'en' => 'More Info',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      242 =>
        array (
          'en' => 'Chat Templates',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      243 =>
        array (
          'en' => 'Add Template',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      244 =>
        array (
          'en' => 'Template Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      245 =>
        array (
          'en' => 'Package',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      246 =>
        array (
          'en' => 'Title for the template that will be show in templates library',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      247 =>
        array (
          'en' => 'Template Description',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      248 =>
        array (
          'en' => 'A short description about what this template do.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      249 =>
        array (
          'en' => 'Template Icon',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      250 =>
        array (
          'en' => 'Paste the svg code you get from the Font Awesome Icons or any other icon library',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      251 =>
        array (
          'en' => 'Template Category',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      252 =>
        array (
          'en' => 'Categories of the template. For filtering in the templates list.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      253 =>
        array (
          'en' => 'Inputs',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      254 =>
        array (
          'en' => 'Select Input Type',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      255 =>
        array (
          'en' => 'Input fields for short texts and Textarea fields are good for long text.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      256 =>
        array (
          'en' => 'Input Field',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      257 =>
        array (
          'en' => 'Textarea Field',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      258 =>
        array (
          'en' => 'Input Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      259 =>
        array (
          'en' => 'Unique input name that you can use in your prompts later.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      260 =>
        array (
          'en' => 'Input Description',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      261 =>
        array (
          'en' => 'A description for the input.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      262 =>
        array (
          'en' => 'Remove',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      263 =>
        array (
          'en' => 'Enter Name Here',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      264 =>
        array (
          'en' => 'Enter Description Here',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      265 =>
        array (
          'en' => 'Prompt',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      266 =>
        array (
          'en' => 'Created Inputs',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      267 =>
        array (
          'en' => 'Click on each item to get the dynamic data from users input.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      268 =>
        array (
          'en' => 'Custom Prompt',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      269 =>
        array (
          'en' => 'Custom Templates',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      270 =>
        array (
          'en' => 'Passive',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      271 =>
        array (
          'en' => 'Built-in Templates',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      272 =>
        array (
          'en' => 'Disable',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      273 =>
        array (
          'en' => 'Afghanistan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      274 =>
        array (
          'en' => 'Åland Islands',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      275 =>
        array (
          'en' => 'Albania',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      276 =>
        array (
          'en' => 'Algeria',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      277 =>
        array (
          'en' => 'American Samoa',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      278 =>
        array (
          'en' => 'Andorra',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      279 =>
        array (
          'en' => 'Angola',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      280 =>
        array (
          'en' => 'Anguilla',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      281 =>
        array (
          'en' => 'Antarctica',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      282 =>
        array (
          'en' => 'Antigua and Barbuda',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      283 =>
        array (
          'en' => 'Argentina',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      284 =>
        array (
          'en' => 'Armenia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      285 =>
        array (
          'en' => 'Aruba',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      286 =>
        array (
          'en' => 'Australia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      287 =>
        array (
          'en' => 'Austria',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      288 =>
        array (
          'en' => 'Azerbaijan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      289 =>
        array (
          'en' => 'Bahamas',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      290 =>
        array (
          'en' => 'Bahrain',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      291 =>
        array (
          'en' => 'Bangladesh',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      292 =>
        array (
          'en' => 'Barbados',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      293 =>
        array (
          'en' => 'Belarus',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      294 =>
        array (
          'en' => 'Belgium',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      295 =>
        array (
          'en' => 'Belize',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      296 =>
        array (
          'en' => 'Benin',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      297 =>
        array (
          'en' => 'Bermuda',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      298 =>
        array (
          'en' => 'Bhutan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      299 =>
        array (
          'en' => 'Bolivia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      300 =>
        array (
          'en' => 'Bosnia and Herzegovina',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      301 =>
        array (
          'en' => 'Botswana',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      302 =>
        array (
          'en' => 'Bouvet Island',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      303 =>
        array (
          'en' => 'Brazil',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      304 =>
        array (
          'en' => 'British Indian Ocean Territory',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      305 =>
        array (
          'en' => 'Brunei Darussalam',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      306 =>
        array (
          'en' => 'Bulgaria',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      307 =>
        array (
          'en' => 'Burkina Faso',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      308 =>
        array (
          'en' => 'Burundi',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      309 =>
        array (
          'en' => 'Cambodia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      310 =>
        array (
          'en' => 'Cameroon',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      311 =>
        array (
          'en' => 'Canada',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      312 =>
        array (
          'en' => 'Cape Verde',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      313 =>
        array (
          'en' => 'Cayman Islands',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      314 =>
        array (
          'en' => 'Central African Republic',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      315 =>
        array (
          'en' => 'Chad',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      316 =>
        array (
          'en' => 'Chile',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      317 =>
        array (
          'en' => 'China',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      318 =>
        array (
          'en' => 'Christmas Island',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      319 =>
        array (
          'en' => 'Cocos (Keeling) Islands',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      320 =>
        array (
          'en' => 'Colombia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      321 =>
        array (
          'en' => 'Comoros',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      322 =>
        array (
          'en' => 'Congo',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      323 =>
        array (
          'en' => 'Congo, The Democratic Republic of The',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      324 =>
        array (
          'en' => 'Cook Islands',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      325 =>
        array (
          'en' => 'Costa Rica',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      326 =>
        array (
          'en' => 'Cote D\\\'ivoire',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      327 =>
        array (
          'en' => 'Croatia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      328 =>
        array (
          'en' => 'Cuba',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      329 =>
        array (
          'en' => 'Cyprus',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      330 =>
        array (
          'en' => 'Czech Republic',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      331 =>
        array (
          'en' => 'Denmark',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      332 =>
        array (
          'en' => 'Djibouti',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      333 =>
        array (
          'en' => 'Dominica',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      334 =>
        array (
          'en' => 'Dominican Republic',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      335 =>
        array (
          'en' => 'Ecuador',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      336 =>
        array (
          'en' => 'Egypt',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      337 =>
        array (
          'en' => 'El Salvador',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      338 =>
        array (
          'en' => 'Equatorial Guinea',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      339 =>
        array (
          'en' => 'Eritrea',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      340 =>
        array (
          'en' => 'Estonia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      341 =>
        array (
          'en' => 'Ethiopia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      342 =>
        array (
          'en' => 'Falkland Islands (Malvinas',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      343 =>
        array (
          'en' => 'Faroe Islands',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      344 =>
        array (
          'en' => 'Fiji',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      345 =>
        array (
          'en' => 'Finland',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      346 =>
        array (
          'en' => 'France',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      347 =>
        array (
          'en' => 'French Guiana',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      348 =>
        array (
          'en' => 'French Polynesia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      349 =>
        array (
          'en' => 'French Southern Territories',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      350 =>
        array (
          'en' => 'Gabon',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      351 =>
        array (
          'en' => 'Gambia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      352 =>
        array (
          'en' => 'Georgia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      353 =>
        array (
          'en' => 'Germany',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      354 =>
        array (
          'en' => 'Ghana',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      355 =>
        array (
          'en' => 'Gibraltar',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      356 =>
        array (
          'en' => 'Greece',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      357 =>
        array (
          'en' => 'Greenland',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      358 =>
        array (
          'en' => 'Grenada',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      359 =>
        array (
          'en' => 'Guadeloupe',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      360 =>
        array (
          'en' => 'Guam',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      361 =>
        array (
          'en' => 'Guatemala',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      362 =>
        array (
          'en' => 'Guernsey',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      363 =>
        array (
          'en' => 'Guinea',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      364 =>
        array (
          'en' => 'Guinea-bissau',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      365 =>
        array (
          'en' => 'Guyana',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      366 =>
        array (
          'en' => 'Haiti',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      367 =>
        array (
          'en' => 'Heard Island and Mcdonald Islands',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      368 =>
        array (
          'en' => 'Holy See (Vatican City State',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      369 =>
        array (
          'en' => 'Honduras',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      370 =>
        array (
          'en' => 'Hong Kong',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      371 =>
        array (
          'en' => 'Hungary',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      372 =>
        array (
          'en' => 'Iceland',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      373 =>
        array (
          'en' => 'India',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      374 =>
        array (
          'en' => 'Indonesia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      375 =>
        array (
          'en' => 'Iran, Islamic Republic of',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      376 =>
        array (
          'en' => 'Iraq',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      377 =>
        array (
          'en' => 'Ireland',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      378 =>
        array (
          'en' => 'Isle of Man',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      379 =>
        array (
          'en' => 'Israel',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      380 =>
        array (
          'en' => 'Italy',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      381 =>
        array (
          'en' => 'Jamaica',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      382 =>
        array (
          'en' => 'Japan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      383 =>
        array (
          'en' => 'Jersey',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      384 =>
        array (
          'en' => 'Jordan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      385 =>
        array (
          'en' => 'Kazakhstan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      386 =>
        array (
          'en' => 'Kenya',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      387 =>
        array (
          'en' => 'Kiribati',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      388 =>
        array (
          'en' => 'Korea, Democratic People\\\'s Republic of',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      389 =>
        array (
          'en' => 'Korea, Republic of',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      390 =>
        array (
          'en' => 'Kuwait',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      391 =>
        array (
          'en' => 'Kyrgyzstan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      392 =>
        array (
          'en' => 'Lao People\\\'s Democratic Republic',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      393 =>
        array (
          'en' => 'Latvia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      394 =>
        array (
          'en' => 'Lebanon',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      395 =>
        array (
          'en' => 'Lesotho',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      396 =>
        array (
          'en' => 'Liberia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      397 =>
        array (
          'en' => 'Libyan Arab Jamahiriya',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      398 =>
        array (
          'en' => 'Liechtenstein',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      399 =>
        array (
          'en' => 'Lithuania',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      400 =>
        array (
          'en' => 'Luxembourg',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      401 =>
        array (
          'en' => 'Macao',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      402 =>
        array (
          'en' => 'Macedonia, The Former Yugoslav Republic of',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      403 =>
        array (
          'en' => 'Madagascar',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      404 =>
        array (
          'en' => 'Malawi',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      405 =>
        array (
          'en' => 'Malaysia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      406 =>
        array (
          'en' => 'Maldives',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      407 =>
        array (
          'en' => 'Mali',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      408 =>
        array (
          'en' => 'Malta',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      409 =>
        array (
          'en' => 'Marshall Islands',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      410 =>
        array (
          'en' => 'Martinique',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      411 =>
        array (
          'en' => 'Mauritania',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      412 =>
        array (
          'en' => 'Mauritius',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      413 =>
        array (
          'en' => 'Mayotte',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      414 =>
        array (
          'en' => 'Mexico',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      415 =>
        array (
          'en' => 'Micronesia, Federated States of',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      416 =>
        array (
          'en' => 'Moldova, Republic of',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      417 =>
        array (
          'en' => 'Monaco',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      418 =>
        array (
          'en' => 'Mongolia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      419 =>
        array (
          'en' => 'Montenegro',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      420 =>
        array (
          'en' => 'Montserrat',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      421 =>
        array (
          'en' => 'Morocco',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      422 =>
        array (
          'en' => 'Mozambique',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      423 =>
        array (
          'en' => 'Myanmar',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      424 =>
        array (
          'en' => 'Namibia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      425 =>
        array (
          'en' => 'Nauru',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      426 =>
        array (
          'en' => 'Nepal',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      427 =>
        array (
          'en' => 'Netherlands',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      428 =>
        array (
          'en' => 'Netherlands Antilles',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      429 =>
        array (
          'en' => 'New Caledonia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      430 =>
        array (
          'en' => 'New Zealand',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      431 =>
        array (
          'en' => 'Nicaragua',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      432 =>
        array (
          'en' => 'Niger',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      433 =>
        array (
          'en' => 'Nigeria',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      434 =>
        array (
          'en' => 'Niue',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      435 =>
        array (
          'en' => 'Norfolk Island',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      436 =>
        array (
          'en' => 'Northern Mariana Islands',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      437 =>
        array (
          'en' => 'Norway',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      438 =>
        array (
          'en' => 'Oman',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      439 =>
        array (
          'en' => 'Pakistan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      440 =>
        array (
          'en' => 'Palau',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      441 =>
        array (
          'en' => 'Palestinian Territory, Occupied',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      442 =>
        array (
          'en' => 'Panama',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      443 =>
        array (
          'en' => 'Papua New Guinea',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      444 =>
        array (
          'en' => 'Paraguay',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      445 =>
        array (
          'en' => 'Peru',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      446 =>
        array (
          'en' => 'Philippines',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      447 =>
        array (
          'en' => 'Pitcairn',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      448 =>
        array (
          'en' => 'Poland',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      449 =>
        array (
          'en' => 'Portugal',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      450 =>
        array (
          'en' => 'Puerto Rico',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      451 =>
        array (
          'en' => 'Qatar',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      452 =>
        array (
          'en' => 'Reunion',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      453 =>
        array (
          'en' => 'Romania',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      454 =>
        array (
          'en' => 'Russian Federation',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      455 =>
        array (
          'en' => 'Rwanda',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      456 =>
        array (
          'en' => 'Saint Helena',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      457 =>
        array (
          'en' => 'Saint Kitts and Nevis',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      458 =>
        array (
          'en' => 'Saint Lucia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      459 =>
        array (
          'en' => 'Saint Pierre and Miquelon',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      460 =>
        array (
          'en' => 'Saint Vincent and The Grenadines',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      461 =>
        array (
          'en' => 'Samoa',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      462 =>
        array (
          'en' => 'San Marino',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      463 =>
        array (
          'en' => 'Sao Tome and Principe',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      464 =>
        array (
          'en' => 'Saudi Arabia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      465 =>
        array (
          'en' => 'Senegal',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      466 =>
        array (
          'en' => 'Serbia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      467 =>
        array (
          'en' => 'Seychelles',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      468 =>
        array (
          'en' => 'Sierra Leone',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      469 =>
        array (
          'en' => 'Singapore',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      470 =>
        array (
          'en' => 'Slovakia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      471 =>
        array (
          'en' => 'Slovenia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      472 =>
        array (
          'en' => 'Solomon Islands',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      473 =>
        array (
          'en' => 'Somalia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      474 =>
        array (
          'en' => 'South Africa',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      475 =>
        array (
          'en' => 'South Georgia and The South Sandwich Islands',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      476 =>
        array (
          'en' => 'Spain',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      477 =>
        array (
          'en' => 'Sri Lanka',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      478 =>
        array (
          'en' => 'Sudan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      479 =>
        array (
          'en' => 'Suriname',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      480 =>
        array (
          'en' => 'Svalbard and Jan Mayen',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      481 =>
        array (
          'en' => 'Swaziland',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      482 =>
        array (
          'en' => 'Sweden',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      483 =>
        array (
          'en' => 'Switzerland',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      484 =>
        array (
          'en' => 'Syrian Arab Republic',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      485 =>
        array (
          'en' => 'Taiwan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      486 =>
        array (
          'en' => 'Tajikistan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      487 =>
        array (
          'en' => 'Tanzania, United Republic of',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      488 =>
        array (
          'en' => 'Thailand',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      489 =>
        array (
          'en' => 'Timor-leste',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      490 =>
        array (
          'en' => 'Togo',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      491 =>
        array (
          'en' => 'Tokelau',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      492 =>
        array (
          'en' => 'Tonga',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      493 =>
        array (
          'en' => 'Trinidad and Tobago',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      494 =>
        array (
          'en' => 'Tunisia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      495 =>
        array (
          'en' => 'Turkey',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      496 =>
        array (
          'en' => 'Turkmenistan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      497 =>
        array (
          'en' => 'Turks and Caicos Islands',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      498 =>
        array (
          'en' => 'Tuvalu',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      499 =>
        array (
          'en' => 'Uganda',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
    ));
    \DB::table('translations_strings')->insert(array (
      0 =>
        array (
          'en' => 'Ukraine',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      1 =>
        array (
          'en' => 'United Arab Emirates',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      2 =>
        array (
          'en' => 'United Kingdom',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      3 =>
        array (
          'en' => 'United States',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      4 =>
        array (
          'en' => 'United States Minor Outlying Islands',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      5 =>
        array (
          'en' => 'Uruguay',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      6 =>
        array (
          'en' => 'Uzbekistan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      7 =>
        array (
          'en' => 'Vanuatu',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      8 =>
        array (
          'en' => 'Venezuela',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      9 =>
        array (
          'en' => 'Viet Nam',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      10 =>
        array (
          'en' => 'Virgin Islands, British',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      11 =>
        array (
          'en' => 'Virgin Islands, U.S',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      12 =>
        array (
          'en' => 'Wallis and Futuna',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      13 =>
        array (
          'en' => 'Western Sahara',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      14 =>
        array (
          'en' => 'Yemen',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      15 =>
        array (
          'en' => 'Zambia',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      16 =>
        array (
          'en' => 'Zimbabwe',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      17 =>
        array (
          'en' => 'General Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      18 =>
        array (
          'en' => 'Global Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      19 =>
        array (
          'en' => 'Site Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      20 =>
        array (
          'en' => 'Site URL',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      21 =>
        array (
          'en' => 'Site Email',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      22 =>
        array (
          'en' => 'Default Country',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      23 =>
        array (
          'en' => 'Default Currency',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      24 =>
        array (
          'en' => 'Registration Active',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      25 =>
        array (
          'en' => 'Free Usage After Registration',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      26 =>
        array (
          'en' => 'If you want to give to your user free words usage for test',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      27 =>
        array (
          'en' => 'Free Images Usage After Registration',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      28 =>
        array (
          'en' => 'If you want to give to your user free images usage for test',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      29 =>
        array (
          'en' => 'Social Login',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      30 =>
        array (
          'en' => 'Follow this documentation for configure social login.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      31 =>
        array (
          'en' => 'Facebook',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      32 =>
        array (
          'en' => 'Google',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      33 =>
        array (
          'en' => 'Github',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      34 =>
        array (
          'en' => 'Disable Login Without Confirmation',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      35 =>
        array (
          'en' => 'If this is enabled users cannot login unless they confirm their emails.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      36 =>
        array (
          'en' => 'Logo Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      37 =>
        array (
          'en' => 'Site Favicon',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      38 =>
        array (
          'en' => 'Site Logo',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      39 =>
        array (
          'en' => 'Site Logo Dark',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      40 =>
        array (
          'en' => 'Seo Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      41 =>
        array (
          'en' => 'Google Analytics Tracking ID',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      42 =>
        array (
          'en' => 'Meta Title',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      43 =>
        array (
          'en' => 'Meta Description',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      44 =>
        array (
          'en' => 'Meta Keywords',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      45 =>
        array (
          'en' => 'OpenAI, AI Writer, AI Image Generator, AI Chat, AI Code',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      46 =>
        array (
          'en' => 'Manage the Features',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      47 =>
        array (
          'en' => 'Manage the features you want to activate for users.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      48 =>
        array (
          'en' => 'AI Writer',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      49 =>
        array (
          'en' => 'AI Image',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      50 =>
        array (
          'en' => 'AI Chat',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      51 =>
        array (
          'en' => 'AI Code',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      52 =>
        array (
          'en' => 'AI Speech to Text',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      53 =>
        array (
          'en' => 'Billing Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      54 =>
        array (
          'en' => 'Invoice Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      55 =>
        array (
          'en' => 'Invoice Website',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      56 =>
        array (
          'en' => 'Invoice Address',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      57 =>
        array (
          'en' => 'Invoice City',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      58 =>
        array (
          'en' => 'Invoice State',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      59 =>
        array (
          'en' => 'Invoice Postal',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      60 =>
        array (
          'en' => 'Invoice Country',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      61 =>
        array (
          'en' => 'Invoice Phone',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      62 =>
        array (
          'en' => 'Invoice VAT',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      63 =>
        array (
          'en' => 'Arabic',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      64 =>
        array (
          'en' => 'Chinese (Mandarin)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      65 =>
        array (
          'en' => 'Croatian (Croatia)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      66 =>
        array (
          'en' => 'Czech (Czech Republic)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      67 =>
        array (
          'en' => 'Danish (Denmark)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      68 =>
        array (
          'en' => 'Dutch (Netherlands)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      69 =>
        array (
          'en' => 'English (USA)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      70 =>
        array (
          'en' => 'Estonian (Estonia)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      71 =>
        array (
          'en' => 'Finnish (Finland)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      72 =>
        array (
          'en' => 'French (France)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      73 =>
        array (
          'en' => 'German (Germany)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      74 =>
        array (
          'en' => 'Greek (Greece)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      75 =>
        array (
          'en' => 'Hebrew (Israel)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      76 =>
        array (
          'en' => 'Hindi (India)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      77 =>
        array (
          'en' => 'Hungarian (Hungary)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      78 =>
        array (
          'en' => 'Icelandic (Iceland)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      79 =>
        array (
          'en' => 'Indonesian (Indonesia)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      80 =>
        array (
          'en' => 'Italian (Italy)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      81 =>
        array (
          'en' => 'Japanese (Japan)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      82 =>
        array (
          'en' => 'Korean (South Korea)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      83 =>
        array (
          'en' => 'Malay (Malaysia)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      84 =>
        array (
          'en' => 'Norwegian (Norway)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      85 =>
        array (
          'en' => 'Polish (Poland)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      86 =>
        array (
          'en' => 'Portuguese (Brazil)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      87 =>
        array (
          'en' => 'Portuguese (Portugal)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      88 =>
        array (
          'en' => 'Romanian (Romania)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      89 =>
        array (
          'en' => 'Russian (Russia)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      90 =>
        array (
          'en' => 'Slovenian (Slovenia)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      91 =>
        array (
          'en' => 'Spanish (Spain)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      92 =>
        array (
          'en' => 'Swahili (Kenya)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      93 =>
        array (
          'en' => 'Swedish (Sweden)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      94 =>
        array (
          'en' => 'Turkish (Turkey)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      95 =>
        array (
          'en' => 'Vietnamese (Vietnam)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      96 =>
        array (
          'en' => 'Openai Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      97 =>
        array (
          'en' => 'OpenAI Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      98 =>
        array (
          'en' => 'OpenAi API Secret',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      99 =>
        array (
          'en' => 'You can enter as much API KEY as you want. Click "Enter" after each api key.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      100 =>
        array (
          'en' => 'Please ensure that your OpenAI API key is fully functional and billing defined on your OpenAI account.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      101 =>
        array (
          'en' => 'After Saving Setting, Click Here to Test Your Api Keys',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      102 =>
        array (
          'en' => 'Default Openai Model',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      103 =>
        array (
          'en' => 'Davinci (Expensive & Capable)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      104 =>
        array (
          'en' => 'ChatGPT (Fastest & Builded for Chatbot)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      105 =>
        array (
          'en' => 'ChatGPT-4 (Most Expensive & Fastest & Most Capable)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      106 =>
        array (
          'en' => 'Please note GPT-4 is not working with every api_key. You have to have an api key which can work with GPT-4.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      107 =>
        array (
          'en' => 'Default Openai Language',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      108 =>
        array (
          'en' => 'Default Tone of Voice',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      109 =>
        array (
          'en' => 'Professional',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      110 =>
        array (
          'en' => 'Funny',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      111 =>
        array (
          'en' => 'Casual',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      112 =>
        array (
          'en' => 'Excited',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      113 =>
        array (
          'en' => 'Witty',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      114 =>
        array (
          'en' => 'Sarcastic',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      115 =>
        array (
          'en' => 'Feminine',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      116 =>
        array (
          'en' => 'Masculine',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      117 =>
        array (
          'en' => 'Bold',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      118 =>
        array (
          'en' => 'Dramatic',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      119 =>
        array (
          'en' => 'Grumpy',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      120 =>
        array (
          'en' => 'Secretive',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      121 =>
        array (
          'en' => 'Default Creativity',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      122 =>
        array (
          'en' => 'Economic',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      123 =>
        array (
          'en' => 'Average',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      124 =>
        array (
          'en' => 'Good',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      125 =>
        array (
          'en' => 'Maximum Input Length',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      126 =>
        array (
          'en' => 'In Characters',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      127 =>
        array (
          'en' => 'Maximum Output Length',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      128 =>
        array (
          'en' => 'In Words. OpenAI has a hard limit based on Token limits for each model. Refer to OpenAI documentation to learn more. As a recommended by OpenAI, max result length is capped at 2500 Words',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      129 =>
        array (
          'en' => 'Image Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      130 =>
        array (
          'en' => 'Default Image processor',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      131 =>
        array (
          'en' => 'Stable Diffusion API Key',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      132 =>
        array (
          'en' => 'Stable Diffusion Engine',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      133 =>
        array (
          'en' => 'Stable Diffusion v1.5',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      134 =>
        array (
          'en' => 'Stable Diffusion v2.1',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      135 =>
        array (
          'en' => 'Stable Diffusion v2.1-768',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      136 =>
        array (
          'en' => 'Stable Diffusion v2.2.2-XL Beta',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      137 =>
        array (
          'en' => 'MAIL Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      138 =>
        array (
          'en' => 'SMTP Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      139 =>
        array (
          'en' => 'SMTP Host',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      140 =>
        array (
          'en' => 'SMTP Port',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      141 =>
        array (
          'en' => 'SMTP Username',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      142 =>
        array (
          'en' => 'SMTP Password',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      143 =>
        array (
          'en' => 'SMTP Sender Email',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      144 =>
        array (
          'en' => 'SMTP Sender Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      145 =>
        array (
          'en' => 'SMTP Encryption',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      146 =>
        array (
          'en' => 'SMTP Test',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      147 =>
        array (
          'en' => 'Test Email',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      148 =>
        array (
          'en' => 'Send',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      149 =>
        array (
          'en' => 'Stripe Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      150 =>
        array (
          'en' => 'Stripe Api Key (Stripe Key)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      151 =>
        array (
          'en' => 'Stripe Secret Key (Stripe Secret)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      152 =>
        array (
          'en' => 'Stripe Base URL (https://api.stripe.com)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      153 =>
        array (
          'en' => 'Update',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      154 =>
        array (
          'en' => 'Warning',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      155 =>
        array (
          'en' => 'Your server memory_limit is',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      156 =>
        array (
          'en' => 'It should be minimum',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      157 =>
        array (
          'en' => 'If you do not set the required minimum value, you may get possible errors during the update.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      158 =>
        array (
          'en' => 'A newer version of',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      159 =>
        array (
          'en' => 'is available.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      160 =>
        array (
          'en' => 'Update the memory_limit value',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      161 =>
        array (
          'en' => 'Update Now',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      162 =>
        array (
          'en' => 'is up to date',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      163 =>
        array (
          'en' => 'Change-log',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      164 =>
        array (
          'en' => 'Surname',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      165 =>
        array (
          'en' => 'Phone',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      166 =>
        array (
          'en' => 'Email',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      167 =>
        array (
          'en' => 'Country',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      168 =>
        array (
          'en' => 'Admin',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      169 =>
        array (
          'en' => 'User',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      170 =>
        array (
          'en' => 'Remaining Words',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      171 =>
        array (
          'en' => 'Remaining Images',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      172 =>
        array (
          'en' => 'User Management',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      173 =>
        array (
          'en' => 'Words Left',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      174 =>
        array (
          'en' => 'Images Left',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      175 =>
        array (
          'en' => 'Disbaled',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      176 =>
        array (
          'en' => 'Sign in',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      177 =>
        array (
          'en' => 'Password',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      178 =>
        array (
          'en' => 'Forgot Password?',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      179 =>
        array (
          'en' => 'Remember Me',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      180 =>
        array (
          'en' => 'Loading...',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      181 =>
        array (
          'en' => 'Don\\\'t have a account yet?',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      182 =>
        array (
          'en' => 'Create an account',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      183 =>
        array (
          'en' => 'or',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      184 =>
        array (
          'en' => 'Test Credentials',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      185 =>
        array (
          'en' => 'Login Successfully, Redirecting...',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      186 =>
        array (
          'en' => 'Reset Password',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      187 =>
        array (
          'en' => 'Send Instructions',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      188 =>
        array (
          'en' => 'Remember Your Password?',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      189 =>
        array (
          'en' => 'Password reset link sent successfully. Please also check your spam folder.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      190 =>
        array (
          'en' => 'Change Password',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      191 =>
        array (
          'en' => 'Password Confirmation',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      192 =>
        array (
          'en' => 'Password successfully changed.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      193 =>
        array (
          'en' => 'Register',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      194 =>
        array (
          'en' => 'Ready To Be Surprised',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      195 =>
        array (
          'en' => 'Fist Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      196 =>
        array (
          'en' => 'Your First Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      197 =>
        array (
          'en' => 'Last Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      198 =>
        array (
          'en' => 'Your Last Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      199 =>
        array (
          'en' => 'Sign up',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      200 =>
        array (
          'en' => 'You already have a account yet?',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      201 =>
        array (
          'en' => 'Login',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      202 =>
        array (
          'en' => 'Registration successfully, Redirecting...',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      203 =>
        array (
          'en' => 'Library',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      204 =>
        array (
          'en' => 'Documents',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      205 =>
        array (
          'en' => 'Admin Panel',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      206 =>
        array (
          'en' => 'Dashboard',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      207 =>
        array (
          'en' => 'Templates',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      208 =>
        array (
          'en' => 'AI System',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      209 =>
        array (
          'en' => 'AI Custom',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      210 =>
        array (
          'en' => 'Chat Personage',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      211 =>
        array (
          'en' => 'Frontend',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      212 =>
        array (
          'en' => 'How it Works Section',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      213 =>
        array (
          'en' => 'Finance',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      214 =>
        array (
          'en' => 'Membership Plans',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      215 =>
        array (
          'en' => 'Create New Plan Pack',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      216 =>
        array (
          'en' => 'General',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      217 =>
        array (
          'en' => 'Invoice',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      218 =>
        array (
          'en' => 'AI Config',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      219 =>
        array (
          'en' => 'Mail',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      220 =>
        array (
          'en' => 'Translate Strings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      221 =>
        array (
          'en' => 'Upgrade',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      222 =>
        array (
          'en' => 'Create Document',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      223 =>
        array (
          'en' => 'Orders',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      224 =>
        array (
          'en' => 'My Documents',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      225 =>
        array (
          'en' => 'New',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      226 =>
        array (
          'en' => 'Affiliate',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      227 =>
        array (
          'en' => 'Invite your friends and earn commision from their first purchase.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      228 =>
        array (
          'en' => 'Affiliate Link',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      229 =>
        array (
          'en' => 'Earnings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      230 =>
        array (
          'en' => 'Comission Rate',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      231 =>
        array (
          'en' => 'Referral Program',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      232 =>
        array (
          'en' => 'All Purchases',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      233 =>
        array (
          'en' => 'How it works',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      234 =>
        array (
          'en' => 'You <strong>send your invitation link</strong> to your friends.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      235 =>
        array (
          'en' => '<strong>They subscribe</strong> to a paid plan by using your refferral link.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      236 =>
        array (
          'en' => 'You <strong>start earning commision</strong> from their first purchase.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      237 =>
        array (
          'en' => 'Withdrawal Form',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      238 =>
        array (
          'en' => 'Your Bank Information',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      239 =>
        array (
          'en' => 'Bank of America - 2382372329 3843749 2372379',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      240 =>
        array (
          'en' => 'Minimum Withdrawal Amount is',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      241 =>
        array (
          'en' => 'Send Request',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      242 =>
        array (
          'en' => 'You have no withdraval request',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      243 =>
        array (
          'en' => 'AI Creator',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      244 =>
        array (
          'en' => 'Remaining Credits',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      245 =>
        array (
          'en' => 'Maximum Length',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      246 =>
        array (
          'en' => 'Maximum character length of text',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      247 =>
        array (
          'en' => 'Number of Results',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      248 =>
        array (
          'en' => 'Number of results',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      249 =>
        array (
          'en' => 'Creativity',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      250 =>
        array (
          'en' => 'Tone of Voice',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      251 =>
        array (
          'en' => 'Language',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      252 =>
        array (
          'en' => 'Please wait...',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      253 =>
        array (
          'en' => 'Generate',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      254 =>
        array (
          'en' => 'Untitled Document...',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      255 =>
        array (
          'en' => 'Copy to clipboard',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      256 =>
        array (
          'en' => 'Document Saved Successfully.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      257 =>
        array (
          'en' => 'Type of code',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      258 =>
        array (
          'en' => 'Code Language (Next.js, PHP ...)',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      259 =>
        array (
          'en' => 'Copy',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      260 =>
        array (
          'en' => 'Your code container',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      261 =>
        array (
          'en' => 'Category',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      262 =>
        array (
          'en' => 'Words/Size',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      263 =>
        array (
          'en' => 'Created Date',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      264 =>
        array (
          'en' => 'Document Edit',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      265 =>
        array (
          'en' => 'Image Size',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      266 =>
        array (
          'en' => 'Art Style',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      267 =>
        array (
          'en' => 'None',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      268 =>
        array (
          'en' => '3D Render',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      269 =>
        array (
          'en' => 'Anime',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      270 =>
        array (
          'en' => 'Ballpoint Pen Drawing',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      271 =>
        array (
          'en' => 'Bauhaus',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      272 =>
        array (
          'en' => 'Cartoon',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      273 =>
        array (
          'en' => 'Clay',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      274 =>
        array (
          'en' => 'Contemporary',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      275 =>
        array (
          'en' => 'Cubism',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      276 =>
        array (
          'en' => 'Cyberpunk',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      277 =>
        array (
          'en' => 'Glitchcore',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      278 =>
        array (
          'en' => 'Impressionism',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      279 =>
        array (
          'en' => 'Isometric',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      280 =>
        array (
          'en' => 'Line Art',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      281 =>
        array (
          'en' => 'Low Poly',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      282 =>
        array (
          'en' => 'Minimalism',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      283 =>
        array (
          'en' => 'Modern',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      284 =>
        array (
          'en' => 'Origami',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      285 =>
        array (
          'en' => 'Pencil Drawing',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      286 =>
        array (
          'en' => 'Pixel',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      287 =>
        array (
          'en' => 'Pointillism',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      288 =>
        array (
          'en' => 'Pop',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      289 =>
        array (
          'en' => 'Realistic',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      290 =>
        array (
          'en' => 'Renaissance',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      291 =>
        array (
          'en' => 'Retro',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      292 =>
        array (
          'en' => 'Steampunk',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      293 =>
        array (
          'en' => 'Sticker',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      294 =>
        array (
          'en' => 'Ukiyo',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      295 =>
        array (
          'en' => 'Vaporwave',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      296 =>
        array (
          'en' => 'Vector',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      297 =>
        array (
          'en' => 'Watercolor',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      298 =>
        array (
          'en' => 'Lightning Style',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      299 =>
        array (
          'en' => 'Ambient',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      300 =>
        array (
          'en' => 'Backlight',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      301 =>
        array (
          'en' => 'Blue Hour',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      302 =>
        array (
          'en' => 'Cinematic',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      303 =>
        array (
          'en' => 'Cold',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      304 =>
        array (
          'en' => 'Foggy',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      305 =>
        array (
          'en' => 'Golden Hour',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      306 =>
        array (
          'en' => 'Hard',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      307 =>
        array (
          'en' => 'Natural',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      308 =>
        array (
          'en' => 'Neon',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      309 =>
        array (
          'en' => 'Studio',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      310 =>
        array (
          'en' => 'Warm',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      311 =>
        array (
          'en' => 'Mood',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      312 =>
        array (
          'en' => 'Aggressive',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      313 =>
        array (
          'en' => 'Angry',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      314 =>
        array (
          'en' => 'Boring',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      315 =>
        array (
          'en' => 'Bright',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      316 =>
        array (
          'en' => 'Calm',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      317 =>
        array (
          'en' => 'Cheerful',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      318 =>
        array (
          'en' => 'Chilling',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      319 =>
        array (
          'en' => 'Colorful',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      320 =>
        array (
          'en' => 'Dark',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      321 =>
        array (
          'en' => 'Neutral',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      322 =>
        array (
          'en' => 'Number of Images',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      323 =>
        array (
          'en' => 'Your generation results',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      324 =>
        array (
          'en' => 'List of generators',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      325 =>
        array (
          'en' => 'AI Speech To Text',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      326 =>
        array (
          'en' => 'Upload your file in format',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      327 =>
        array (
          'en' => 'Max File size accepted:',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      328 =>
        array (
          'en' => 'Audio file',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      329 =>
        array (
          'en' => 'New Conversation',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      330 =>
        array (
          'en' => 'Search',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      331 =>
        array (
          'en' => 'Personage',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      332 =>
        array (
          'en' => 'Prompt Library',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      333 =>
        array (
          'en' => 'Your Message',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      334 =>
        array (
          'en' => 'Something went wrong',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      335 =>
        array (
          'en' => 'Are you sure you want to remove ?',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      336 =>
        array (
          'en' => 'Deleted with success',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      337 =>
        array (
          'en' => 'Please retry',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      338 =>
        array (
          'en' => 'No Chats Found',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      339 =>
        array (
          'en' => 'Close',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      340 =>
        array (
          'en' => 'Cancel',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      341 =>
        array (
          'en' => 'Hours Saved',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      342 =>
        array (
          'en' => 'Pay Tokens',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      343 =>
        array (
          'en' => 'Subscription Plans',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      344 =>
        array (
          'en' => 'Our Subscription Packages',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      345 =>
        array (
          'en' => 'Ready to get started ?',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      346 =>
        array (
          'en' => 'Popular Plan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      347 =>
        array (
          'en' => 'Access',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      348 =>
        array (
          'en' => 'Word Tokens',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      349 =>
        array (
          'en' => 'Image Tokens',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      350 =>
        array (
          'en' => 'Already Subscribed',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      351 =>
        array (
          'en' => 'Cancel Subscription',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      352 =>
        array (
          'en' => 'You have an active subscription.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      353 =>
        array (
          'en' => 'Choose plan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      354 =>
        array (
          'en' => 'Subscribe',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      355 =>
        array (
          'en' => 'You have to enable enable a payment gateway for subscribe',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      356 =>
        array (
          'en' => 'Popular Pack',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      357 =>
        array (
          'en' => 'You have to enable enable a payment gateway to paid pack',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      358 =>
        array (
          'en' => 'Card Owner Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      359 =>
        array (
          'en' => 'Pay',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      360 =>
        array (
          'en' => 'Change Pack',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      361 =>
        array (
          'en' => 'Please Wait, Processing...',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      362 =>
        array (
          'en' => 'Pay with Stripe',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      363 =>
        array (
          'en' => 'Change Plan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      364 =>
        array (
          'en' => 'You can leave empty if you don’t want to change your password.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      365 =>
        array (
          'en' => 'Old Password',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      366 =>
        array (
          'en' => 'New Password',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      367 =>
        array (
          'en' => 'Confirm Your New Password',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      368 =>
        array (
          'en' => 'My Subscriptions History',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      369 =>
        array (
          'en' => 'Subscriptions History Management',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      370 =>
        array (
          'en' => 'Order Id',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      371 =>
        array (
          'en' => 'Join US',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      372 =>
        array (
          'en' => '“\'.$testimonial->content.\'”',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      373 =>
        array (
          'en' => 'Monthly Billing ',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      374 =>
        array (
          'en' => 'One-Time',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      375 =>
        array (
          'en' => 'Month',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      376 =>
        array (
          'en' => 'Days of free trial.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      377 =>
        array (
          'en' => 'Words Tokens',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      378 =>
        array (
          'en' => 'Images Tokens',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      379 =>
        array (
          'en' => 'Start Free Trial',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      380 =>
        array (
          'en' => 'Choose',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      381 =>
        array (
          'en' => '+20 Chats Animator',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      382 =>
        array (
          'en' => 'Access to AI writer features to help you.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      383 =>
        array (
          'en' => 'PDF, Word, and Text Export',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      384 =>
        array (
          'en' => '70+ Languages',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      385 =>
        array (
          'en' => 'Synthesize text up to 10K characters',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      386 =>
        array (
          'en' => 'Chatbot support',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      387 =>
        array (
          'en' => 'Advance Editor Tool',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      388 =>
        array (
          'en' => 'Home',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      389 =>
        array (
          'en' => 'Instagram',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      390 =>
        array (
          'en' => 'Twitter',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      391 =>
        array (
          'en' => 'All Rights Reserved.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      392 =>
        array (
          'en' => 'Made by',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      393 =>
        array (
          'en' => 'How It Works',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      394 =>
        array (
          'en' => 'Pricing',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      395 =>
        array (
          'en' => 'FAQ',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      396 =>
        array (
          'en' => 'Sign In',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      397 =>
        array (
          'en' => 'Setup',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      398 =>
        array (
          'en' => 'Hi please do not enter / at the end of the url. For Example: https://oricodes.com',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      399 =>
        array (
          'en' => 'Advanced Options',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      400 =>
        array (
          'en' => 'Installation Finished',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      401 =>
        array (
          'en' => 'Complete Activation',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      402 =>
        array (
          'en' => 'Welcome',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      403 =>
        array (
          'en' => 'Server Requirements',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      404 =>
        array (
          'en' => 'Database Setup',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      405 =>
        array (
          'en' => 'Done',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      406 =>
        array (
          'en' => 'Version required',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      407 =>
        array (
          'en' => 'Next',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      408 =>
        array (
          'en' => 'Installation Wizard',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      409 =>
        array (
          'en' => 'Start Installation',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      410 =>
        array (
          'en' => 'Languages installed',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      411 =>
        array (
          'en' => 'Generate JSON File',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      412 =>
        array (
          'en' => 'JSON File Generated',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      413 =>
        array (
          'en' => 'All Locations',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      414 =>
        array (
          'en' => 'If you have previously created or edited a language file (JSON), the Generate process will overwrite those files. Take a backup before process.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      415 =>
        array (
          'en' => 'Ex. Hello',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      416 =>
        array (
          'en' => 'New String',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      417 =>
        array (
          'en' => 'Are you sure you want to create a new language?',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      418 =>
        array (
          'en' => 'lang code Ex. es',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      419 =>
        array (
          'en' => 'New Language',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      420 =>
        array (
          'en' => 'Translation Strings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      421 =>
        array (
          'en' => 'Editing',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      422 =>
        array (
          'en' => 'Show',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      423 =>
        array (
          'en' => 'Search Result for',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      424 =>
        array (
          'en' => 'You have currently subscribed to',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      425 =>
        array (
          'en' => 'plan.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      426 =>
        array (
          'en' => 'Your plan will be refill automatically in',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      427 =>
        array (
          'en' => 'Days.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      428 =>
        array (
          'en' => 'You have no subscription at the moment. Please select a subscription plan or a token pack.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      429 =>
        array (
          'en' => 'Cancel My Plan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      430 =>
        array (
          'en' => 'Select a Plan',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      431 =>
        array (
          'en' => 'Personnage',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      432 =>
        array (
          'en' => 'These credentials do not match our records.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      433 =>
        array (
          'en' => 'The provided password is incorrect.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      434 =>
        array (
          'en' => 'Too many login attempts. Please try again in :seconds seconds.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      435 =>
        array (
          'en' => 'Laravel Installer',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      436 =>
        array (
          'en' => 'Next Step',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      437 =>
        array (
          'en' => 'Previous',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      438 =>
        array (
          'en' => 'Install',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      439 =>
        array (
          'en' => 'The Following errors occurred:',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      440 =>
        array (
          'en' => 'Laravel Installer',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      441 =>
        array (
          'en' => 'Easy Installation and Setup Wizard.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      442 =>
        array (
          'en' => 'Check Requirements',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      443 =>
        array (
          'en' => 'Step 1 | Server Requirements',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      444 =>
        array (
          'en' => 'Check Permissions',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      445 =>
        array (
          'en' => 'Step 2 | Permissions',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      446 =>
        array (
          'en' => 'Permissions',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      447 =>
        array (
          'en' => 'Configure Environment',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      448 =>
        array (
          'en' => 'Step 3 | Environment Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      449 =>
        array (
          'en' => 'Environment Settings',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      450 =>
        array (
          'en' => 'Please select how you want to configure the apps <code>.env</code> file.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      451 =>
        array (
          'en' => 'Form Wizard Setup',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      452 =>
        array (
          'en' => 'Classic Text Editor',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      453 =>
        array (
          'en' => 'Step 3 | Environment Settings | Guided Wizard',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      454 =>
        array (
          'en' => 'Guided <code>.env</code> Wizard',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      455 =>
        array (
          'en' => 'Environment',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      456 =>
        array (
          'en' => 'Database',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      457 =>
        array (
          'en' => 'Application',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      458 =>
        array (
          'en' => 'An environment name is required.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      459 =>
        array (
          'en' => 'App Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      460 =>
        array (
          'en' => 'App Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      461 =>
        array (
          'en' => 'App Environment',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      462 =>
        array (
          'en' => 'Local',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      463 =>
        array (
          'en' => 'Development',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      464 =>
        array (
          'en' => 'Qa',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      465 =>
        array (
          'en' => 'Production',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      466 =>
        array (
          'en' => 'Other',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      467 =>
        array (
          'en' => 'Enter your environment...',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      468 =>
        array (
          'en' => 'App Debug',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      469 =>
        array (
          'en' => 'True',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      470 =>
        array (
          'en' => 'False',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      471 =>
        array (
          'en' => 'App Log Level',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      472 =>
        array (
          'en' => 'debug',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      473 =>
        array (
          'en' => 'notice',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      474 =>
        array (
          'en' => 'error',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      475 =>
        array (
          'en' => 'critical',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      476 =>
        array (
          'en' => 'alert',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      477 =>
        array (
          'en' => 'emergency',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      478 =>
        array (
          'en' => 'App URL',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      479 =>
        array (
          'en' => 'App URL',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      480 =>
        array (
          'en' => 'Could not connect to the database.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      481 =>
        array (
          'en' => 'Database Connection',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      482 =>
        array (
          'en' => 'mysql',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      483 =>
        array (
          'en' => 'sqlite',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      484 =>
        array (
          'en' => 'pgsql',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      485 =>
        array (
          'en' => 'sqlsrv',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      486 =>
        array (
          'en' => 'Database Host',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      487 =>
        array (
          'en' => 'Database Host',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      488 =>
        array (
          'en' => 'Database Port',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      489 =>
        array (
          'en' => 'Database Port',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      490 =>
        array (
          'en' => 'Database Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      491 =>
        array (
          'en' => 'Database Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      492 =>
        array (
          'en' => 'Database User Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      493 =>
        array (
          'en' => 'Database User Name',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      494 =>
        array (
          'en' => 'Database Password',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      495 =>
        array (
          'en' => 'Database Password',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      496 =>
        array (
          'en' => 'Broadcasting, Caching, Session, &amp; Queue',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      497 =>
        array (
          'en' => 'Broadcast Driver',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      498 =>
        array (
          'en' => 'Broadcast Driver',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      499 =>
        array (
          'en' => 'Cache Driver',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
    ));
    \DB::table('translations_strings')->insert(array (
      0 =>
        array (
          'en' => 'Cache Driver',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      1 =>
        array (
          'en' => 'Session Driver',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      2 =>
        array (
          'en' => 'Session Driver',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      3 =>
        array (
          'en' => 'Queue Driver',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      4 =>
        array (
          'en' => 'Queue Driver',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      5 =>
        array (
          'en' => 'Redis Driver',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      6 =>
        array (
          'en' => 'Redis Host',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      7 =>
        array (
          'en' => 'Redis Password',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      8 =>
        array (
          'en' => 'Redis Port',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      9 =>
        array (
          'en' => 'Mail Driver',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      10 =>
        array (
          'en' => 'Mail Driver',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      11 =>
        array (
          'en' => 'Mail Host',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      12 =>
        array (
          'en' => 'Mail Host',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      13 =>
        array (
          'en' => 'Mail Port',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      14 =>
        array (
          'en' => 'Mail Port',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      15 =>
        array (
          'en' => 'Mail Username',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      16 =>
        array (
          'en' => 'Mail Username',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      17 =>
        array (
          'en' => 'Mail Password',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      18 =>
        array (
          'en' => 'Mail Password',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      19 =>
        array (
          'en' => 'Mail Encryption',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      20 =>
        array (
          'en' => 'Mail Encryption',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      21 =>
        array (
          'en' => 'Pusher',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      22 =>
        array (
          'en' => 'Pusher App Id',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      23 =>
        array (
          'en' => 'Pusher App Id',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      24 =>
        array (
          'en' => 'Pusher App Key',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      25 =>
        array (
          'en' => 'Pusher App Key',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      26 =>
        array (
          'en' => 'Pusher App Secret',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      27 =>
        array (
          'en' => 'Pusher App Secret',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      28 =>
        array (
          'en' => 'Setup Database',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      29 =>
        array (
          'en' => 'Setup Application',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      30 =>
        array (
          'en' => 'Install',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      31 =>
        array (
          'en' => 'Step 3 | Environment Settings | Classic Editor',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      32 =>
        array (
          'en' => 'Classic Environment Editor',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      33 =>
        array (
          'en' => 'Save .env',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      34 =>
        array (
          'en' => 'Use Form Wizard',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      35 =>
        array (
          'en' => 'Save and Install',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      36 =>
        array (
          'en' => 'Your .env file settings have been saved.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      37 =>
        array (
          'en' => 'Unable to save the .env file, Please create it manually.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      38 =>
        array (
          'en' => 'Install',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      39 =>
        array (
          'en' => 'Laravel Installer successfully INSTALLED on ',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      40 =>
        array (
          'en' => 'Application has been successfully installed.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      41 =>
        array (
          'en' => 'Migration &amp; Seed Console Output:',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      42 =>
        array (
          'en' => 'Application Console Output:',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      43 =>
        array (
          'en' => 'Installation Log Entry:',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      44 =>
        array (
          'en' => 'Final .env File:',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      45 =>
        array (
          'en' => 'Click here to exit',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      46 =>
        array (
          'en' => 'Laravel Updater',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      47 =>
        array (
          'en' => 'Welcome To The Updater',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      48 =>
        array (
          'en' => 'Welcome to the update wizard.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      49 =>
        array (
          'en' => 'Overview',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      50 =>
        array (
          'en' => 'There is 1 update.|There are :number updates.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      51 =>
        array (
          'en' => 'Install Updates',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      52 =>
        array (
          'en' => 'Finished',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      53 =>
        array (
          'en' => 'Application\'s database has been successfully updated.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      54 =>
        array (
          'en' => 'Click here to exit',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      55 =>
        array (
          'en' => 'Laravel Installer successfully UPDATED on ',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      56 =>
        array (
          'en' => 'System\'s version: ',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      57 =>
        array (
          'en' => 'The user is not authorized to perform updates.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      58 =>
        array (
          'en' => 'The system IS ALREADY UPDATED to last version.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      59 =>
        array (
          'en' => 'Backup folder created.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      60 =>
        array (
          'en' => 'Backup found: ',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      61 =>
        array (
          'en' => 'Downloading the update...',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      62 =>
        array (
          'en' => 'Update downloaded successfully.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      63 =>
        array (
          'en' => 'An error occurred during the download.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      64 =>
        array (
          'en' => 'Maintenance mode: ON',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      65 =>
        array (
          'en' => 'Maintenance mode: OFF',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      66 =>
        array (
          'en' => 'Update installed successfully.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      67 =>
        array (
          'en' => 'An error occurred during the installation.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      68 =>
        array (
          'en' => 'LaraUpdater is attempting to recovery your system from backup.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      69 =>
        array (
          'en' => 'Recovery completed successfully.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      70 =>
        array (
          'en' => 'Recovery failed, try it manually. Remember: \'php artisan up\' to disable the maintenance mode.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      71 =>
        array (
          'en' => 'An exception occurred: ',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      72 =>
        array (
          'en' => 'Changelog:',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      73 =>
        array (
          'en' => 'Directory created: ',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      74 =>
        array (
          'en' => 'File exist: ',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      75 =>
        array (
          'en' => 'File copied: ',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      76 =>
        array (
          'en' => 'Execute the script included into the update.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      77 =>
        array (
          'en' => 'Temporary files deleted.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      78 =>
        array (
          'en' => '&laquo; Previous',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      79 =>
        array (
          'en' => 'Next &raquo;',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      80 =>
        array (
          'en' => 'Your password has been reset.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      81 =>
        array (
          'en' => 'We have emailed your password reset link.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      82 =>
        array (
          'en' => 'Please wait before retrying.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      83 =>
        array (
          'en' => 'This password reset token is invalid.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      84 =>
        array (
          'en' => 'We can\'t find a user with that email address.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      85 =>
        array (
          'en' => 'The :attribute field must be accepted.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      86 =>
        array (
          'en' => 'The :attribute field must be accepted when :other is :value.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      87 =>
        array (
          'en' => 'The :attribute field must be a valid URL.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      88 =>
        array (
          'en' => 'The :attribute field must be a date after :date.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      89 =>
        array (
          'en' => 'The :attribute field must be a date after or equal to :date.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      90 =>
        array (
          'en' => 'The :attribute field must only contain letters.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      91 =>
        array (
          'en' => 'The :attribute field must only contain letters, numbers, dashes, and underscores.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      92 =>
        array (
          'en' => 'The :attribute field must only contain letters and numbers.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      93 =>
        array (
          'en' => 'The :attribute field must be an array.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      94 =>
        array (
          'en' => 'The :attribute field must only contain single-byte alphanumeric characters and symbols.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      95 =>
        array (
          'en' => 'The :attribute field must be a date before :date.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      96 =>
        array (
          'en' => 'The :attribute field must be a date before or equal to :date.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      97 =>
        array (
          'en' => 'The :attribute field must have between :min and :max items.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      98 =>
        array (
          'en' => 'The :attribute field must be between :min and :max kilobytes.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      99 =>
        array (
          'en' => 'The :attribute field must be between :min and :max.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      100 =>
        array (
          'en' => 'The :attribute field must be between :min and :max characters.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      101 =>
        array (
          'en' => 'The :attribute field must be true or false.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      102 =>
        array (
          'en' => 'The :attribute field confirmation does not match.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      103 =>
        array (
          'en' => 'The password is incorrect.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      104 =>
        array (
          'en' => 'The :attribute field must be a valid date.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      105 =>
        array (
          'en' => 'The :attribute field must be a date equal to :date.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      106 =>
        array (
          'en' => 'The :attribute field must match the format :format.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      107 =>
        array (
          'en' => 'The :attribute field must have :decimal decimal places.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      108 =>
        array (
          'en' => 'The :attribute field must be declined.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      109 =>
        array (
          'en' => 'The :attribute field must be declined when :other is :value.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      110 =>
        array (
          'en' => 'The :attribute field and :other must be different.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      111 =>
        array (
          'en' => 'The :attribute field must be :digits digits.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      112 =>
        array (
          'en' => 'The :attribute field must be between :min and :max digits.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      113 =>
        array (
          'en' => 'The :attribute field has invalid image dimensions.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      114 =>
        array (
          'en' => 'The :attribute field has a duplicate value.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      115 =>
        array (
          'en' => 'The :attribute field must not end with one of the following: :values.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      116 =>
        array (
          'en' => 'The :attribute field must not start with one of the following: :values.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      117 =>
        array (
          'en' => 'The :attribute field must be a valid email address.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      118 =>
        array (
          'en' => 'The :attribute field must end with one of the following: :values.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      119 =>
        array (
          'en' => 'The selected :attribute is invalid.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      120 =>
        array (
          'en' => 'The selected :attribute is invalid.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      121 =>
        array (
          'en' => 'The :attribute field must be a file.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      122 =>
        array (
          'en' => 'The :attribute field must have a value.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      123 =>
        array (
          'en' => 'The :attribute field must have more than :value items.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      124 =>
        array (
          'en' => 'The :attribute field must be greater than :value kilobytes.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      125 =>
        array (
          'en' => 'The :attribute field must be greater than :value.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      126 =>
        array (
          'en' => 'The :attribute field must be greater than :value characters.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      127 =>
        array (
          'en' => 'The :attribute field must have :value items or more.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      128 =>
        array (
          'en' => 'The :attribute field must be greater than or equal to :value kilobytes.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      129 =>
        array (
          'en' => 'The :attribute field must be greater than or equal to :value.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      130 =>
        array (
          'en' => 'The :attribute field must be greater than or equal to :value characters.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      131 =>
        array (
          'en' => 'The :attribute field must be an image.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      132 =>
        array (
          'en' => 'The selected :attribute is invalid.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      133 =>
        array (
          'en' => 'The :attribute field must exist in :other.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      134 =>
        array (
          'en' => 'The :attribute field must be an integer.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      135 =>
        array (
          'en' => 'The :attribute field must be a valid IP address.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      136 =>
        array (
          'en' => 'The :attribute field must be a valid IPv4 address.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      137 =>
        array (
          'en' => 'The :attribute field must be a valid IPv6 address.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      138 =>
        array (
          'en' => 'The :attribute field must be a valid JSON string.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      139 =>
        array (
          'en' => 'The :attribute field must be lowercase.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      140 =>
        array (
          'en' => 'The :attribute field must have less than :value items.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      141 =>
        array (
          'en' => 'The :attribute field must be less than :value kilobytes.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      142 =>
        array (
          'en' => 'The :attribute field must be less than :value.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      143 =>
        array (
          'en' => 'The :attribute field must be less than :value characters.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      144 =>
        array (
          'en' => 'The :attribute field must not have more than :value items.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      145 =>
        array (
          'en' => 'The :attribute field must be less than or equal to :value kilobytes.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      146 =>
        array (
          'en' => 'The :attribute field must be less than or equal to :value.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      147 =>
        array (
          'en' => 'The :attribute field must be less than or equal to :value characters.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      148 =>
        array (
          'en' => 'The :attribute field must be a valid MAC address.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      149 =>
        array (
          'en' => 'The :attribute field must not have more than :max items.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      150 =>
        array (
          'en' => 'The :attribute field must not be greater than :max kilobytes.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      151 =>
        array (
          'en' => 'The :attribute field must not be greater than :max.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      152 =>
        array (
          'en' => 'The :attribute field must not be greater than :max characters.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      153 =>
        array (
          'en' => 'The :attribute field must not have more than :max digits.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      154 =>
        array (
          'en' => 'The :attribute field must be a file of type: :values.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      155 =>
        array (
          'en' => 'The :attribute field must be a file of type: :values.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      156 =>
        array (
          'en' => 'The :attribute field must have at least :min items.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      157 =>
        array (
          'en' => 'The :attribute field must be at least :min kilobytes.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      158 =>
        array (
          'en' => 'The :attribute field must be at least :min.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      159 =>
        array (
          'en' => 'The :attribute field must be at least :min characters.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      160 =>
        array (
          'en' => 'The :attribute field must have at least :min digits.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      161 =>
        array (
          'en' => 'The :attribute field must be missing.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      162 =>
        array (
          'en' => 'The :attribute field must be missing when :other is :value.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      163 =>
        array (
          'en' => 'The :attribute field must be missing unless :other is :value.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      164 =>
        array (
          'en' => 'The :attribute field must be missing when :values is present.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      165 =>
        array (
          'en' => 'The :attribute field must be missing when :values are present.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      166 =>
        array (
          'en' => 'The :attribute field must be a multiple of :value.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      167 =>
        array (
          'en' => 'The selected :attribute is invalid.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      168 =>
        array (
          'en' => 'The :attribute field format is invalid.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      169 =>
        array (
          'en' => 'The :attribute field must be a number.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      170 =>
        array (
          'en' => 'The :attribute field must contain at least one letter.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      171 =>
        array (
          'en' => 'The :attribute field must contain at least one uppercase and one lowercase letter.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      172 =>
        array (
          'en' => 'The :attribute field must contain at least one number.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      173 =>
        array (
          'en' => 'The :attribute field must contain at least one symbol.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      174 =>
        array (
          'en' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      175 =>
        array (
          'en' => 'The :attribute field must be present.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      176 =>
        array (
          'en' => 'The :attribute field is prohibited.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      177 =>
        array (
          'en' => 'The :attribute field is prohibited when :other is :value.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      178 =>
        array (
          'en' => 'The :attribute field is prohibited unless :other is in :values.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      179 =>
        array (
          'en' => 'The :attribute field prohibits :other from being present.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      180 =>
        array (
          'en' => 'The :attribute field format is invalid.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      181 =>
        array (
          'en' => 'The :attribute field is required.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      182 =>
        array (
          'en' => 'The :attribute field must contain entries for: :values.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      183 =>
        array (
          'en' => 'The :attribute field is required when :other is :value.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      184 =>
        array (
          'en' => 'The :attribute field is required when :other is accepted.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      185 =>
        array (
          'en' => 'The :attribute field is required unless :other is in :values.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      186 =>
        array (
          'en' => 'The :attribute field is required when :values is present.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      187 =>
        array (
          'en' => 'The :attribute field is required when :values are present.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      188 =>
        array (
          'en' => 'The :attribute field is required when :values is not present.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      189 =>
        array (
          'en' => 'The :attribute field is required when none of :values are present.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      190 =>
        array (
          'en' => 'The :attribute field must match :other.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      191 =>
        array (
          'en' => 'The :attribute field must contain :size items.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      192 =>
        array (
          'en' => 'The :attribute field must be :size kilobytes.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      193 =>
        array (
          'en' => 'The :attribute field must be :size.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      194 =>
        array (
          'en' => 'The :attribute field must be :size characters.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      195 =>
        array (
          'en' => 'The :attribute field must start with one of the following: :values.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      196 =>
        array (
          'en' => 'The :attribute field must be a string.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      197 =>
        array (
          'en' => 'The :attribute field must be a valid timezone.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      198 =>
        array (
          'en' => 'The :attribute has already been taken.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      199 =>
        array (
          'en' => 'The :attribute failed to upload.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      200 =>
        array (
          'en' => 'The :attribute field must be uppercase.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      201 =>
        array (
          'en' => 'The :attribute field must be a valid URL.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      202 =>
        array (
          'en' => 'The :attribute field must be a valid ULID.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      203 =>
        array (
          'en' => 'The :attribute field must be a valid UUID.',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
      204 =>
        array (
          'en' => 'custom-message',
          'ar' => NULL,
          'fr' => NULL,
          'id' => NULL,
          'th' => NULL,
        ),
    ));


  }
}
