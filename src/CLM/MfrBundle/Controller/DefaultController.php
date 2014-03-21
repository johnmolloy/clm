<?php

namespace CLM\MfrBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CLM\MfrBundle\Entity\Manufacturer;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($mfrname)
    {
        return $this->render('CLMMfrBundle:Default:index.html.twig', array('mfrname' => $mfrname));
    }
	
	public function mfrInformationAction($mfrname)
    {
		$manufacturer = $this->getDoctrine()
			->getRepository('CLMMfrBundle:Manufacturer')
			->findOneByMfrName($mfrname);
			
		if (!$manufacturer) {
			throw $this->createNotFoundException(
				'No manufacturer '.$mfrname.' found'
			);
		}
        return $this->render('CLMMfrBundle:Manufacturer:information.html.twig', array('mfrid' => $manufacturer->getId(), 'mfrname' => $manufacturer->getMfrName(), 'description' => $manufacturer->getDescription(), 'website' => $manufacturer->getWebsite(), 'contactNumber' => $manufacturer->getContactNumber(), 'recoveryTelNumber' => $manufacturer->getRecoveryTelNumber(), 'logoPath' => $manufacturer->getLogoPath()));
    }
	
	public function mfrMenuAction()
    {
		$manufacturers = $this->getDoctrine()
			->getRepository('CLMMfrBundle:Manufacturer')
			->findAll();
			
		if (!$manufacturers) {
			throw $this->createNotFoundException(
				'No manufacturers found'
			);
		}
        return $this->render('CLMMfrBundle:Default:mfrmenu.html.twig', array('manufacturers' => $manufacturers));
    }

	public function createAction()
	{
		$manufacturer = new Manufacturer();
		$manufacturer->setMfrName('BMW');
		$manufacturer->setDescription('BMW Description');
		$manufacturer->setWebsite('http://www.bmw.co.uk/');
		$manufacturer->setContactNumber('0800 325 600');
		$manufacturer->setRecoveryTelNumber('0800 777 111');
		$manufacturer->setLogoPath('');
		$manufacturer->setMainMenuInclude('1');
		
		$em = $this->getDoctrine()->getManager();
		$em->persist($manufacturer);
		$em->flush();
		
		return new Response('Created manufacturer: '.$manufacturer->getMfrName());
		
	}
}
