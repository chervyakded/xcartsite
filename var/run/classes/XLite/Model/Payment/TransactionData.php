<?php
namespace XLite\Model\Payment;
/**
 * Transaction data storage
 *
 * @Entity
 * @Table (name="payment_transaction_data",
 *      indexes={
 *          @Index (name="tn", columns={"transaction_id","name"})
 *      }
 * )
 */
class TransactionData extends \XLite\Module\XPay\XPaymentsCloud\Model\Payment\TransactionData {}