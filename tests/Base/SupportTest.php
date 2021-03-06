<?php

class SupportTest extends AimeosTestAbstract
{
	public function testCheckGroup()
	{
		$context = $this->app->make( '\Aimeos\Shop\Base\Context' );
		$locale = $this->app->make( '\Aimeos\Shop\Base\Locale' );

		$object = new \Aimeos\Shop\Base\Support( $context, $locale, 'unittest' );

		$this->assertFalse( $object->checkGroup( -1, 'admin' ) );
	}


	public function testGetGroups()
	{
		$context = $this->app->make( '\Aimeos\Shop\Base\Context' );
		$locale = $this->app->make( '\Aimeos\Shop\Base\Locale' );

		$object = new \Aimeos\Shop\Base\Support( $context, $locale, 'unittest' );

		$this->assertEquals( array(), $object->getGroups() );
	}
}
