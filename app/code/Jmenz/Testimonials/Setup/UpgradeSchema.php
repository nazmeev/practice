<?php

namespace Jmenz\Testimonials\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

use Jmenz\Testimonials\Api\Data\TestimonialsInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        $connection = $installer->getConnection();

        if (version_compare($context->getVersion(), '1.0.1', '<')) {

            if ($connection->isTableExists($installer->getTable("testimonials"))) {
                $connection->addColumn(
                    $installer->getTable("testimonials"),
                    TestimonialsInterface::USER_NAME,
                    [
                        'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        'nullable' => false,
                        'comment' => "User Name"
                    ]
                );
            }
            $installer->endSetup();
        }


        $setup->endSetup();
    }
}