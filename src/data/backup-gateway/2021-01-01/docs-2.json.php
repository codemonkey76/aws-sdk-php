<?php
// This file was auto-generated from sdk-root/src/data/backup-gateway/2021-01-01/docs-2.json
return [ 'version' => '2.0', 'service' => '<p><fullname>Backup gateway</fullname> <p>Backup gateway connects Backup to your hypervisor, so you can create, store, and restore backups of your virtual machines (VMs) anywhere, whether on-premises or in the VMware Cloud (VMC) on Amazon Web Services.</p> <p>Add on-premises resources by connecting to a hypervisor through a gateway. Backup will automatically discover the resources in your hypervisor.</p> <p>Use Backup to assign virtual or on-premises resources to a backup plan, or run on-demand backups. Once you have backed up your resources, you can view them and restore them like any resource supported by Backup.</p> <p>To download the Amazon Web Services software to get started, navigate to the Backup console, choose <b>Gateways</b>, then choose <b>Create gateway</b>.</p></p>', 'operations' => [ 'AssociateGatewayToServer' => '<p>Associates a backup gateway with your server. After you complete the association process, you can back up and restore your VMs through the gateway.</p>', 'CreateGateway' => '<p>Creates a backup gateway. After you create a gateway, you can associate it with a server using the <code>AssociateGatewayToServer</code> operation.</p>', 'DeleteGateway' => '<p>Deletes a backup gateway.</p>', 'DeleteHypervisor' => '<p>Deletes a hypervisor.</p>', 'DisassociateGatewayFromServer' => '<p>Disassociates a backup gateway from the specified server. After the disassociation process finishes, the gateway can no longer access the virtual machines on the server.</p>', 'ImportHypervisorConfiguration' => '<p>Connect to a hypervisor by importing its configuration.</p>', 'ListGateways' => '<p>Lists backup gateways owned by an Amazon Web Services account in an Amazon Web Services Region. The returned list is ordered by gateway Amazon Resource Name (ARN).</p>', 'ListHypervisors' => '<p>Lists your hypervisors.</p>', 'ListTagsForResource' => '<p>Lists the tags applied to the resource identified by its Amazon Resource Name (ARN).</p>', 'ListVirtualMachines' => '<p>Lists your virtual machines.</p>', 'PutMaintenanceStartTime' => '<p>Set the maintenance start time for a gateway.</p>', 'TagResource' => '<p>Tag the resource.</p>', 'TestHypervisorConfiguration' => '<p>Tests your hypervisor configuration to validate that backup gateway can connect with the hypervisor and its resources.</p>', 'UntagResource' => '<p>Removes tags from the resource.</p>', 'UpdateGatewayInformation' => '<p>Updates a gateway\'s name. Specify which gateway to update using the Amazon Resource Name (ARN) of the gateway in your request.</p>', 'UpdateHypervisor' => '<p>Updates a hypervisor metadata, including its host, username, and password. Specify which hypervisor to update using the Amazon Resource Name (ARN) of the hypervisor in your request.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>The operation cannot proceed because you have insufficient permissions.</p>', 'refs' => [], ], 'ActivationKey' => [ 'base' => NULL, 'refs' => [ 'CreateGatewayInput$ActivationKey' => '<p>The activation key of the created gateway.</p>', ], ], 'AssociateGatewayToServerInput' => [ 'base' => NULL, 'refs' => [], ], 'AssociateGatewayToServerOutput' => [ 'base' => NULL, 'refs' => [], ], 'ConflictException' => [ 'base' => '<p>The operation cannot proceed because it is not supported.</p>', 'refs' => [], ], 'CreateGatewayInput' => [ 'base' => NULL, 'refs' => [], ], 'CreateGatewayOutput' => [ 'base' => NULL, 'refs' => [], ], 'DayOfMonth' => [ 'base' => NULL, 'refs' => [ 'PutMaintenanceStartTimeInput$DayOfMonth' => '<p>The day of the month start maintenance on a gateway.</p> <p>Valid values range from <code>Sunday</code> to <code>Saturday</code>.</p>', ], ], 'DayOfWeek' => [ 'base' => NULL, 'refs' => [ 'PutMaintenanceStartTimeInput$DayOfWeek' => '<p>The day of the week to start maintenance on a gateway.</p>', ], ], 'DeleteGatewayInput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteGatewayOutput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteHypervisorInput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteHypervisorOutput' => [ 'base' => NULL, 'refs' => [], ], 'DisassociateGatewayFromServerInput' => [ 'base' => NULL, 'refs' => [], ], 'DisassociateGatewayFromServerOutput' => [ 'base' => NULL, 'refs' => [], ], 'Gateway' => [ 'base' => '<p>A gateway is an Backup Gateway appliance that runs on the customer\'s network to provide seamless connectivity to backup storage in the Amazon Web Services Cloud.</p>', 'refs' => [ 'Gateways$member' => NULL, ], ], 'GatewayArn' => [ 'base' => NULL, 'refs' => [ 'AssociateGatewayToServerInput$GatewayArn' => '<p>The Amazon Resource Name (ARN) of the gateway. Use the <code>ListGateways</code> operation to return a list of gateways for your account and Amazon Web Services Region.</p>', 'AssociateGatewayToServerOutput$GatewayArn' => '<p>The Amazon Resource Name (ARN) of a gateway.</p>', 'CreateGatewayOutput$GatewayArn' => '<p>The Amazon Resource Name (ARN) of the gateway you create.</p>', 'DeleteGatewayInput$GatewayArn' => '<p>The Amazon Resource Name (ARN) of the gateway to delete.</p>', 'DeleteGatewayOutput$GatewayArn' => '<p>The Amazon Resource Name (ARN) of the gateway you deleted.</p>', 'DisassociateGatewayFromServerInput$GatewayArn' => '<p>The Amazon Resource Name (ARN) of the gateway to disassociate.</p>', 'DisassociateGatewayFromServerOutput$GatewayArn' => '<p>The Amazon Resource Name (ARN) of the gateway you disassociated.</p>', 'Gateway$GatewayArn' => '<p>The Amazon Resource Name (ARN) of the gateway. Use the <code>ListGateways</code> operation to return a list of gateways for your account and Amazon Web Services Region.</p>', 'PutMaintenanceStartTimeInput$GatewayArn' => '<p>The Amazon Resource Name (ARN) for the gateway, used to specify its maintenance start time.</p>', 'PutMaintenanceStartTimeOutput$GatewayArn' => '<p>The Amazon Resource Name (ARN) of a gateway for which you set the maintenance start time.</p>', 'TestHypervisorConfigurationInput$GatewayArn' => '<p>The Amazon Resource Name (ARN) of the gateway to the hypervisor to test.</p>', 'UpdateGatewayInformationInput$GatewayArn' => '<p>The Amazon Resource Name (ARN) of the gateway to update.</p>', 'UpdateGatewayInformationOutput$GatewayArn' => '<p>The Amazon Resource Name (ARN) of the gateway you updated.</p>', ], ], 'GatewayType' => [ 'base' => NULL, 'refs' => [ 'CreateGatewayInput$GatewayType' => '<p>The type of created gateway.</p>', 'Gateway$GatewayType' => '<p>The type of the gateway.</p>', ], ], 'Gateways' => [ 'base' => NULL, 'refs' => [ 'ListGatewaysOutput$Gateways' => '<p>A list of your gateways.</p>', ], ], 'Host' => [ 'base' => NULL, 'refs' => [ 'Hypervisor$Host' => '<p>The server host of the hypervisor. This can be either an IP address or a fully-qualified domain name (FQDN).</p>', 'ImportHypervisorConfigurationInput$Host' => '<p>The server host of the hypervisor. This can be either an IP address or a fully-qualified domain name (FQDN).</p>', 'TestHypervisorConfigurationInput$Host' => '<p>The server host of the hypervisor. This can be either an IP address or a fully-qualified domain name (FQDN).</p>', 'UpdateHypervisorInput$Host' => '<p>The updated host of the hypervisor. This can be either an IP address or a fully-qualified domain name (FQDN).</p>', ], ], 'HourOfDay' => [ 'base' => NULL, 'refs' => [ 'PutMaintenanceStartTimeInput$HourOfDay' => '<p>The hour of the day to start maintenance on a gateway.</p>', ], ], 'Hypervisor' => [ 'base' => '<p>Represents the hypervisor\'s permissions to which the gateway will connect.</p> <p>A hypervisor is hardware, software, or firmware that creates and manages virtual machines, and allocates resources to them.</p>', 'refs' => [ 'Hypervisors$member' => NULL, ], ], 'HypervisorId' => [ 'base' => NULL, 'refs' => [ 'Gateway$HypervisorId' => '<p>The hypervisor ID of the gateway.</p>', ], ], 'HypervisorState' => [ 'base' => NULL, 'refs' => [ 'Hypervisor$State' => '<p>The state of the hypervisor.</p>', ], ], 'Hypervisors' => [ 'base' => NULL, 'refs' => [ 'ListHypervisorsOutput$Hypervisors' => '<p>A list of your <code>Hypervisor</code> objects, ordered by their Amazon Resource Names (ARNs).</p>', ], ], 'ImportHypervisorConfigurationInput' => [ 'base' => NULL, 'refs' => [], ], 'ImportHypervisorConfigurationOutput' => [ 'base' => NULL, 'refs' => [], ], 'InternalServerException' => [ 'base' => '<p>The operation did not succeed because an internal error occurred. Try again later.</p>', 'refs' => [], ], 'KmsKeyArn' => [ 'base' => NULL, 'refs' => [ 'Hypervisor$KmsKeyArn' => '<p>The Amazon Resource Name (ARN) of the Key Management Service used to encrypt the hypervisor.</p>', 'ImportHypervisorConfigurationInput$KmsKeyArn' => '<p>The Key Management Service for the hypervisor.</p>', ], ], 'ListGatewaysInput' => [ 'base' => NULL, 'refs' => [], ], 'ListGatewaysOutput' => [ 'base' => NULL, 'refs' => [], ], 'ListHypervisorsInput' => [ 'base' => NULL, 'refs' => [], ], 'ListHypervisorsOutput' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceInput' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceOutput' => [ 'base' => NULL, 'refs' => [], ], 'ListVirtualMachinesInput' => [ 'base' => NULL, 'refs' => [], ], 'ListVirtualMachinesOutput' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListGatewaysInput$MaxResults' => '<p>The maximum number of gateways to list.</p>', 'ListHypervisorsInput$MaxResults' => '<p>The maximum number of hypervisors to list.</p>', 'ListVirtualMachinesInput$MaxResults' => '<p>The maximum number of virtual machines to list.</p>', ], ], 'MinuteOfHour' => [ 'base' => NULL, 'refs' => [ 'PutMaintenanceStartTimeInput$MinuteOfHour' => '<p>The minute of the hour to start maintenance on a gateway.</p>', ], ], 'Name' => [ 'base' => NULL, 'refs' => [ 'CreateGatewayInput$GatewayDisplayName' => '<p>The display name of the created gateway.</p>', 'Gateway$GatewayDisplayName' => '<p>The display name of the gateway.</p>', 'Hypervisor$Name' => '<p>The name of the hypervisor.</p>', 'ImportHypervisorConfigurationInput$Name' => '<p>The name of the hypervisor.</p>', 'UpdateGatewayInformationInput$GatewayDisplayName' => '<p>The updated display name of the gateway.</p>', 'VirtualMachine$HostName' => '<p>The host name of the virtual machine.</p>', 'VirtualMachine$Name' => '<p>The name of the virtual machine.</p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListGatewaysInput$NextToken' => '<p>The next item following a partial list of returned resources. For example, if a request is made to return <code>MaxResults</code> number of resources, <code>NextToken</code> allows you to return more items in your list starting at the location pointed to by the next token.</p>', 'ListGatewaysOutput$NextToken' => '<p>The next item following a partial list of returned resources. For example, if a request is made to return <code>maxResults</code> number of resources, <code>NextToken</code> allows you to return more items in your list starting at the location pointed to by the next token.</p>', 'ListHypervisorsInput$NextToken' => '<p>The next item following a partial list of returned resources. For example, if a request is made to return <code>maxResults</code> number of resources, <code>NextToken</code> allows you to return more items in your list starting at the location pointed to by the next token.</p>', 'ListHypervisorsOutput$NextToken' => '<p>The next item following a partial list of returned resources. For example, if a request is made to return <code>maxResults</code> number of resources, <code>NextToken</code> allows you to return more items in your list starting at the location pointed to by the next token.</p>', 'ListVirtualMachinesInput$NextToken' => '<p>The next item following a partial list of returned resources. For example, if a request is made to return <code>maxResults</code> number of resources, <code>NextToken</code> allows you to return more items in your list starting at the location pointed to by the next token.</p>', 'ListVirtualMachinesOutput$NextToken' => '<p>The next item following a partial list of returned resources. For example, if a request is made to return <code>maxResults</code> number of resources, <code>NextToken</code> allows you to return more items in your list starting at the location pointed to by the next token.</p>', ], ], 'Password' => [ 'base' => NULL, 'refs' => [ 'ImportHypervisorConfigurationInput$Password' => '<p>The password for the hypervisor.</p>', 'TestHypervisorConfigurationInput$Password' => '<p>The password for the hypervisor.</p>', 'UpdateHypervisorInput$Password' => '<p>The updated password for the hypervisor.</p>', ], ], 'Path' => [ 'base' => NULL, 'refs' => [ 'VirtualMachine$Path' => '<p>The path of the virtual machine.</p>', ], ], 'PutMaintenanceStartTimeInput' => [ 'base' => NULL, 'refs' => [], ], 'PutMaintenanceStartTimeOutput' => [ 'base' => NULL, 'refs' => [], ], 'ResourceArn' => [ 'base' => NULL, 'refs' => [ 'ListTagsForResourceInput$ResourceArn' => '<p>The Amazon Resource Name (ARN) of the resource\'s tags to list.</p>', 'ListTagsForResourceOutput$ResourceArn' => '<p>The Amazon Resource Name (ARN) of the resource\'s tags that you listed.</p>', 'TagResourceInput$ResourceARN' => '<p>The Amazon Resource Name (ARN) of the resource to tag.</p>', 'TagResourceOutput$ResourceARN' => '<p>The Amazon Resource Name (ARN) of the resource you tagged.</p>', 'UntagResourceInput$ResourceARN' => '<p>The Amazon Resource Name (ARN) of the resource from which to remove tags.</p>', 'UntagResourceOutput$ResourceARN' => '<p>The Amazon Resource Name (ARN) of the resource from which you removed tags.</p>', 'VirtualMachine$ResourceArn' => '<p>The Amazon Resource Name (ARN) of the virtual machine.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>A resource that is required for the action wasn\'t found.</p>', 'refs' => [], ], 'ServerArn' => [ 'base' => NULL, 'refs' => [ 'AssociateGatewayToServerInput$ServerArn' => '<p>The Amazon Resource Name (ARN) of the server that hosts your virtual machines.</p>', 'DeleteHypervisorInput$HypervisorArn' => '<p>The Amazon Resource Name (ARN) of the hypervisor to delete.</p>', 'DeleteHypervisorOutput$HypervisorArn' => '<p>The Amazon Resource Name (ARN) of the hypervisor you deleted.</p>', 'Hypervisor$HypervisorArn' => '<p>The Amazon Resource Name (ARN) of the hypervisor.</p>', 'ImportHypervisorConfigurationOutput$HypervisorArn' => '<p>The Amazon Resource Name (ARN) of the hypervisor you disassociated.</p>', 'UpdateHypervisorInput$HypervisorArn' => '<p>The Amazon Resource Name (ARN) of the hypervisor to update.</p>', 'UpdateHypervisorOutput$HypervisorArn' => '<p>The Amazon Resource Name (ARN) of the hypervisor you updated.</p>', ], ], 'Tag' => [ 'base' => '<p>A key-value pair you can use to manage, filter, and search for your resources. Allowed characters include UTF-8 letters, numbers, spaces, and the following characters: + - = . _ : /.</p>', 'refs' => [ 'Tags$member' => NULL, ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'Tag$Key' => '<p>The key part of a tag\'s key-value pair. The key can\'t start with <code>aws:</code>.</p>', 'TagKeys$member' => NULL, ], ], 'TagKeys' => [ 'base' => NULL, 'refs' => [ 'UntagResourceInput$TagKeys' => '<p>The list of tag keys specifying which tags to remove.</p>', ], ], 'TagResourceInput' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceOutput' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'Tag$Value' => '<p>The key part of a value\'s key-value pair.</p>', ], ], 'Tags' => [ 'base' => NULL, 'refs' => [ 'CreateGatewayInput$Tags' => '<p>A list of up to 50 tags to assign to the gateway. Each tag is a key-value pair.</p>', 'ImportHypervisorConfigurationInput$Tags' => '<p>The tags of the hypervisor configuration to import.</p>', 'ListTagsForResourceOutput$Tags' => '<p>A list of the resource\'s tags.</p>', 'TagResourceInput$Tags' => '<p>A list of tags to assign to the resource.</p>', ], ], 'TestHypervisorConfigurationInput' => [ 'base' => NULL, 'refs' => [], ], 'TestHypervisorConfigurationOutput' => [ 'base' => NULL, 'refs' => [], ], 'Time' => [ 'base' => NULL, 'refs' => [ 'Gateway$LastSeenTime' => '<p>The last time Backup gateway communicated with the gateway, in Unix format and UTC time.</p>', 'VirtualMachine$LastBackupDate' => '<p>The most recent date a virtual machine was backed up, in Unix format and UTC time.</p>', ], ], 'UntagResourceInput' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceOutput' => [ 'base' => NULL, 'refs' => [], ], 'UpdateGatewayInformationInput' => [ 'base' => NULL, 'refs' => [], ], 'UpdateGatewayInformationOutput' => [ 'base' => NULL, 'refs' => [], ], 'UpdateHypervisorInput' => [ 'base' => NULL, 'refs' => [], ], 'UpdateHypervisorOutput' => [ 'base' => NULL, 'refs' => [], ], 'Username' => [ 'base' => NULL, 'refs' => [ 'ImportHypervisorConfigurationInput$Username' => '<p>The username for the hypervisor.</p>', 'TestHypervisorConfigurationInput$Username' => '<p>The username for the hypervisor.</p>', 'UpdateHypervisorInput$Username' => '<p>The updated username for the hypervisor.</p>', ], ], 'ValidationException' => [ 'base' => '<p>The operation did not succeed because a validation error occurred.</p>', 'refs' => [], ], 'VirtualMachine' => [ 'base' => '<p>A virtual machine that is on a hypervisor.</p>', 'refs' => [ 'VirtualMachines$member' => NULL, ], ], 'VirtualMachines' => [ 'base' => NULL, 'refs' => [ 'ListVirtualMachinesOutput$VirtualMachines' => '<p>A list of your <code>VirtualMachine</code> objects, ordered by their Amazon Resource Names (ARNs).</p>', ], ], 'string' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$ErrorCode' => '<p>A description of why you have insufficient permissions.</p>', 'AccessDeniedException$Message' => NULL, 'ConflictException$ErrorCode' => '<p>A description of why the operation is not supported.</p>', 'ConflictException$Message' => NULL, 'InternalServerException$ErrorCode' => '<p>A description of which internal error occured.</p>', 'InternalServerException$Message' => NULL, 'ResourceNotFoundException$ErrorCode' => '<p>A description of which resource wasn\'t found.</p>', 'ResourceNotFoundException$Message' => NULL, 'ValidationException$ErrorCode' => '<p>A description of what caused the validation error.</p>', 'ValidationException$Message' => NULL, 'VirtualMachine$HypervisorId' => '<p>The ID of the virtual machine\'s hypervisor.</p>', ], ], ],];
