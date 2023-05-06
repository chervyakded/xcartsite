<?php
namespace XLite\Model;
/**
 * Order history event data 
 *
 * @Entity
 * @Table (name="order_history_event_data",
 *      indexes={
 *          @Index (name="en", columns={"event_id","name"})
 *      }
 * )
 */
class OrderHistoryEventsData extends \XLite\Module\XPay\XPaymentsCloud\Model\OrderHistoryEventsData {}