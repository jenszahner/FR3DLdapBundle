<?php

namespace FR3D\LdapBundle\Tests\Hydrator;

use FOS\UserBundle\Model\UserManagerInterface;
use FR3D\LdapBundle\Hydrator\LegacyHydrator;
use FR3D\LdapBundle\Tests\TestUser;

class LegacyHydratorTest extends AbstractHydratorTestCase
{
    protected function setUp()
    {
        parent::setUp();

        /** @var UserManagerInterface|\PHPUnit_Framework_MockObject_MockObject $userManager */
        $userManager = $this->getMock('FOS\UserBundle\Model\UserManagerInterface');
        $userManager->expects($this->any())
            ->method('createUser')
            ->will($this->returnValue(new TestUser()));

        $this->hydrator = new LegacyHydrator($userManager, $this->getDefaultUserConfig());
    }
}
